<?php
/** Verifies Razorpay payment signatures and records terminal payment states. */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
$data = newsletter_post_json(); newsletter_require_csrf($data);
$id = newsletter_subscription_id(); $subscription = newsletter_fetch_subscription($conn, $id);
if (!$subscription || empty($subscription['razorpay_order_id'])) { newsletter_json(array('ok' => false, 'message' => 'Payment order was not found.'), 404); }
$event = isset($data['event']) ? $data['event'] : 'success';
if ($event === 'success') {
    $orderId = newsletter_value(isset($data['razorpay_order_id']) ? $data['razorpay_order_id'] : ''); $paymentId = newsletter_value(isset($data['razorpay_payment_id']) ? $data['razorpay_payment_id'] : ''); $signature = newsletter_value(isset($data['razorpay_signature']) ? $data['razorpay_signature'] : '');
    $expected = hash_hmac('sha256', $subscription['razorpay_order_id'] . '|' . $paymentId, $newsletterSettings['razorpay_key_secret']);
    if ($orderId !== $subscription['razorpay_order_id'] || !$paymentId || !hash_equals($expected, $signature)) { newsletter_json(array('ok' => false, 'message' => 'Payment signature verification failed.'), 422); }
    $status = 'paid'; $method = newsletter_value(isset($data['method']) ? $data['method'] : '');
    $statement = $conn->prepare('UPDATE newsletter_subscriptions SET payment_status = ?, razorpay_payment_id = ?, razorpay_signature = ?, payment_method = ?, paid_at = NOW() WHERE id = ?'); $statement->bind_param('ssssi', $status, $paymentId, $signature, $method, $id); $statement->execute(); $statement->close();
} else {
    $status = $event === 'failed' ? 'failed' : 'pending'; $paymentId = newsletter_value(isset($data['payment_id']) ? $data['payment_id'] : ''); $method = newsletter_value(isset($data['method']) ? $data['method'] : '');
    $statement = $conn->prepare('UPDATE newsletter_subscriptions SET payment_status = ?, razorpay_payment_id = NULLIF(?, \'\'), payment_method = NULLIF(?, \'\') WHERE id = ? AND payment_status <> \'paid\''); $statement->bind_param('sssi', $status, $paymentId, $method, $id); $statement->execute(); $statement->close();
}
$subscription = newsletter_fetch_subscription($conn, $id); newsletter_send_status_emails($subscription, $newsletterSettings);
newsletter_json(array('ok' => true, 'status' => $subscription['payment_status']));

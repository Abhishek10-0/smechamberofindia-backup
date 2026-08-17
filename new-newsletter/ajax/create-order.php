<?php

/** Creates a Razorpay order only for an OTP-verified subscription. */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
$data = newsletter_post_json();
newsletter_require_csrf($data);
$id = newsletter_subscription_id();
$subscription = newsletter_fetch_subscription($conn, $id);
if (!$subscription || !(int) $subscription['otp_verified']) {
    newsletter_json(array('ok' => false, 'message' => 'Verify your mobile number first.'), 403);
}
$plans = array('one_year' => array('One Year', 500000), 'three_years' => array('Three Years', 1000000));
$planKey = isset($data['plan']) ? $data['plan'] : '';
if (!isset($plans[$planKey])) {
    newsletter_json(array('ok' => false, 'message' => 'Select a subscription plan.'), 422);
}
list($planName, $baseAmount) = $plans[$planKey];

// 18% GST
$gstAmount = (int) round($baseAmount * 0.18);

// Final amount including GST
$amount = $baseAmount + $gstAmount;

list($ok, $order) = newsletter_razorpay_request('POST', 'orders', array('amount' => $amount, 'currency' => 'INR', 'receipt' => 'newsletter_' . $id, 'notes' => array('subscription_id' => (string) $id)), $newsletterSettings);
if (!$ok) {
    newsletter_json(array('ok' => false, 'message' => $order), 502);
}
$statement = $conn->prepare('UPDATE newsletter_subscriptions SET plan_code = ?, plan_name = ?, amount_paise = ?, razorpay_order_id = ?, payment_status = \'pending\' WHERE id = ?');
$statement->bind_param('ssisi', $planKey, $planName, $amount, $order['id'], $id);
$statement->execute();
$statement->close();
newsletter_json(array('ok' => true, 'key_id' => $newsletterSettings['razorpay_key_id'], 'order_id' => $order['id'], 'amount' => $amount, 'name' => 'SME Chamber of India', 'description' => 'Newsletter subscription - ' . $planName, 'prefill' => array('name' => $subscription['first_name'] . ' ' . $subscription['last_name'], 'email' => $subscription['email'], 'contact' => $subscription['mobile'])));

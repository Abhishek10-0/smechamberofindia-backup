<?php
/** Verifies the expiring, hashed OTP before a payment order can be created. */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
$data = newsletter_post_json(); newsletter_require_csrf($data);
$id = newsletter_subscription_id(); $otp = newsletter_value(isset($data['otp']) ? $data['otp'] : '');
$subscription = newsletter_fetch_subscription($conn, $id);
if (!$subscription || !preg_match('/^[0-9]{6}$/', $otp)) { newsletter_json(array('ok' => false, 'message' => 'Enter a valid OTP.'), 422); }
if ($subscription['otp_verified'] || strtotime($subscription['otp_expires_at']) < time()) { newsletter_json(array('ok' => false, 'message' => 'OTP expired. Please restart the form.'), 422); }
if ((int) $subscription['otp_attempts'] >= (int) $newsletterSettings['otp_max_attempts']) { newsletter_json(array('ok' => false, 'message' => 'Too many OTP attempts. Please restart the form.'), 429); }
if (!password_verify($otp, $subscription['otp_hash'])) {
    $statement = $conn->prepare('UPDATE newsletter_subscriptions SET otp_attempts = otp_attempts + 1 WHERE id = ?'); $statement->bind_param('i', $id); $statement->execute(); $statement->close();
    newsletter_json(array('ok' => false, 'message' => 'Incorrect OTP.'), 422);
}
$statement = $conn->prepare('UPDATE newsletter_subscriptions SET otp_verified = 1, otp_verified_at = NOW(), otp_hash = NULL WHERE id = ?'); $statement->bind_param('i', $id); $statement->execute(); $statement->close();
newsletter_json(array('ok' => true, 'message' => 'Mobile number verified.'));

<?php
/** Creates the pending subscription record and sends its first OTP. */
require_once dirname(__DIR__) . '/includes/bootstrap.php';
$data = newsletter_post_json();
newsletter_require_csrf($data);
list($valid, $details) = newsletter_valid_details($data);
if (!$valid) { newsletter_json(array('ok' => false, 'message' => $details), 422); }

$sql = 'INSERT INTO newsletter_subscriptions (first_name,last_name,designation,company_name,business_sector,turnover,address,city,state,mobile,email,website,consent_given,otp_verified,payment_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,0,\'pending\')';
$statement = $conn->prepare($sql);
$statement->bind_param('ssssssssssssi', $details['first_name'], $details['last_name'], $details['designation'], $details['company_name'], $details['business_sector'], $details['turnover'], $details['address'], $details['city'], $details['state'], $details['mobile'], $details['email'], $details['website'], $details['consent']);
if (!$statement->execute()) { newsletter_json(array('ok' => false, 'message' => 'Unable to save your details.'), 500); }
$id = (int) $conn->insert_id;
$statement->close();

$otp = (string) random_int(100000, 999999);
$hash = password_hash($otp, PASSWORD_DEFAULT);
$expires = date('Y-m-d H:i:s', time() + ((int) $newsletterSettings['otp_expiry_minutes'] * 60));
$attempts = 0;
$statement = $conn->prepare('UPDATE newsletter_subscriptions SET otp_hash = ?, otp_expires_at = ?, otp_attempts = ? WHERE id = ?');
$statement->bind_param('ssii', $hash, $expires, $attempts, $id);
$statement->execute(); $statement->close();
list($sent, $message) = newsletter_send_otp($details['mobile'], $otp, $newsletterSettings);
if (!$sent) { newsletter_json(array('ok' => false, 'message' => $message), 502); }
$_SESSION['newsletter_subscription_id'] = $id;
newsletter_json(array('ok' => true, 'message' => 'OTP sent to your mobile number.'));

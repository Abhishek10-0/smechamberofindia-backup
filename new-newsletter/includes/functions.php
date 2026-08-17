<?php
/** Small, dependency-free helpers used only by the Newsletter module. */

function newsletter_json($payload, $statusCode = 200)
{
    http_response_code($statusCode);
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    echo json_encode($payload);
    exit;
}

function newsletter_post_json()
{
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    return is_array($data) ? $data : $_POST;
}

function newsletter_value($value)
{
    return trim(is_string($value) ? $value : '');
}

function newsletter_csrf_token()
{
    if (empty($_SESSION['newsletter_csrf'])) {
        $_SESSION['newsletter_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['newsletter_csrf'];
}

function newsletter_require_csrf($data)
{
    $token = isset($data['csrf_token']) ? (string) $data['csrf_token'] : '';
    if (empty($_SESSION['newsletter_csrf']) || !hash_equals($_SESSION['newsletter_csrf'], $token)) {
        newsletter_json(array('ok' => false, 'message' => 'Your session has expired. Please refresh and try again.'), 419);
    }
}

function newsletter_subscription_id()
{
    return isset($_SESSION['newsletter_subscription_id']) ? (int) $_SESSION['newsletter_subscription_id'] : 0;
}

function newsletter_fetch_subscription($conn, $id)
{
    $statement = $conn->prepare('SELECT * FROM newsletter_subscriptions WHERE id = ? LIMIT 1');
    $statement->bind_param('i', $id);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();
    $statement->close();
    return $row ?: null;
}

function newsletter_valid_details($data)
{
    $fields = array('first_name', 'last_name', 'designation', 'company_name', 'business_sector', 'turnover', 'address', 'city', 'state', 'mobile', 'email');
    $clean = array();
    foreach ($fields as $field) {
        $clean[$field] = newsletter_value(isset($data[$field]) ? $data[$field] : '');
        if ($clean[$field] === '') {
            return array(false, 'Please complete all required fields.');
        }
    }
    $clean['website'] = newsletter_value(isset($data['website']) ? $data['website'] : '');
    $clean['mobile'] = preg_replace('/\D+/', '', $clean['mobile']);
    $clean['consent'] = !empty($data['consent']) ? 1 : 0;
    if (!preg_match('/^[6-9][0-9]{9}$/', $clean['mobile'])) {
        return array(false, 'Enter a valid 10-digit Indian mobile number.');
    }
    if (!filter_var($clean['email'], FILTER_VALIDATE_EMAIL)) {
        return array(false, 'Enter a valid email address.');
    }
    if ($clean['website'] !== '' && !filter_var($clean['website'], FILTER_VALIDATE_URL)) {
        return array(false, 'Enter a valid website URL, including https://.');
    }
    if (!$clean['consent']) {
        return array(false, 'Consent is required to continue.');
    }
    return array(true, $clean);
}

function newsletter_send_otp($mobile, $otp, $settings)
{
    $template = isset($settings['sms_url_template']) ? trim($settings['sms_url_template']) : '';
    if ($template === '') {
        return array(false, 'SMS gateway is not configured.');
    }
    $url = str_replace(array('{mobile}', '{otp}'), array(rawurlencode($mobile), rawurlencode($otp)), $template);
    $curl = curl_init($url);
    curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 30, CURLOPT_CONNECTTIMEOUT => 10));
    $body = curl_exec($curl);
    $error = curl_error($curl);
    $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($error || $status < 200 || $status >= 300) {
        error_log('Newsletter OTP send failure: ' . ($error ?: 'HTTP ' . $status));
        return array(false, 'Unable to send the OTP. Please try again.');
    }
    return array(true, $body);
}

function newsletter_razorpay_request($method, $path, $payload, $settings)
{
    $keyId = isset($settings['razorpay_key_id']) ? $settings['razorpay_key_id'] : '';
    $keySecret = isset($settings['razorpay_key_secret']) ? $settings['razorpay_key_secret'] : '';
    if ($keyId === '' || $keySecret === '' || strpos($keyId, 'replace_me') !== false) {
        return array(false, 'Razorpay is not configured.');
    }
    $curl = curl_init('https://api.razorpay.com/v1/' . ltrim($path, '/'));
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => strtoupper($method),
        CURLOPT_USERPWD => $keyId . ':' . $keySecret,
        CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
        CURLOPT_POSTFIELDS => json_encode($payload),
    ));
    $response = curl_exec($curl);
    $error = curl_error($curl);
    $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    $decoded = json_decode($response, true);
    if ($error || $status < 200 || $status >= 300 || !is_array($decoded)) {
        error_log('Newsletter Razorpay failure: ' . ($error ?: 'HTTP ' . $status));
        return array(false, 'Could not create the payment order. Please try again.');
    }
    return array(true, $decoded);
}

function newsletter_email($to, $subject, $html, $settings)
{
    $from = $settings['from_email'];
    $name = $settings['from_name'];

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $name <$from>\r\n";

    $sent = mail($to, $subject, $html, $headers);

    return $sent;
}

function newsletter_send_status_emails($subscription, $settings)
{
    $name = htmlspecialchars($subscription['first_name'] . ' ' . $subscription['last_name'], ENT_QUOTES, 'UTF-8');
    $status = ucfirst(strtolower($subscription['payment_status']));
    $plan = htmlspecialchars($subscription['plan_name'], ENT_QUOTES, 'UTF-8');
    $amount = number_format(((int) $subscription['amount_paise']) / 100, 2);
    $paymentId = htmlspecialchars((string) $subscription['razorpay_payment_id'], ENT_QUOTES, 'UTF-8');
    $date = $subscription['paid_at'] ? htmlspecialchars($subscription['paid_at'], ENT_QUOTES, 'UTF-8') : 'Not paid';
    $details = '<p><strong>Subscriber:</strong> ' . $name . '<br><strong>Company:</strong> ' . htmlspecialchars($subscription['company_name'], ENT_QUOTES, 'UTF-8') . '<br><strong>Mobile:</strong> ' . htmlspecialchars($subscription['mobile'], ENT_QUOTES, 'UTF-8') . '<br><strong>Email:</strong> ' . htmlspecialchars($subscription['email'], ENT_QUOTES, 'UTF-8') . '<br><strong>Plan:</strong> ' . $plan . '<br><strong>Amount:</strong> ₹' . $amount . '<br><strong>Status:</strong> ' . $status . '<br><strong>Payment ID:</strong> ' . $paymentId . '<br><strong>Payment date:</strong> ' . $date . '</p>';
    newsletter_email($settings['admin_email'], 'Newsletter subscription: ' . $status, $details, $settings);
    $userMessage = '<p>Dear ' . $name . ',</p><p>Thank you for your newsletter subscription request.</p>' . $details;
    newsletter_email($subscription['email'], 'Newsletter subscription ' . $status, $userMessage, $settings);
}

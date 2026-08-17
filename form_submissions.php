<?php
session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$message = "";

// Step 1: Request OTP
if (isset($_POST['get_otp'])) {
    $name   = $_POST['name'];
    $mobile = $_POST['mobile'];

    // --- Restrict submissions (per minute) ---
    if (isset($_SESSION['last_submit_time']) && (time() - $_SESSION['last_submit_time']) < 60) {
        $message = "⚠️ Please wait 1 minute before requesting OTP again.";
    } else {
        // Generate OTP
        $rndno = rand(100000, 999999);
        $_SESSION['otp'] = $rndno;
        $_SESSION['form_data'] = ['name' => $name, 'mobile' => $mobile];
        $_SESSION['otp_time'] = time();
        $_SESSION['last_submit_time'] = time();

        // SMS API parameters
        $mobileNumber = $mobile;
        $sender   = "SMECHM";
        $entityId = "1201158099447823312"; // from your DLT
        $apiKey   = "c21lY2htOmlXejVvYkJD"; // use your real API key

        $smsMessage = urlencode("$rndno is the OTP for the registration process - $sender");

        $url = "http://103.211.202.40/sendsms/bulksms_v2.php?apikey=$apiKey&type=TEXT&sender=$sender&entityId=$entityId&mobile=$mobileNumber&message=$smsMessage";

        // Send OTP via cURL
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("cache-control: no-cache")
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            $message = "❌ OTP sending failed: $err";
        } else {
            $message = "✅ OTP sent to $mobile. Please enter it below.";
        }
    }
}

// Step 2: Verify OTP
if (isset($_POST['verify_otp'])) {
    $userOtp = $_POST['otp'];

    if (!isset($_SESSION['otp']) || !isset($_SESSION['form_data'])) {
        $message = "❌ No OTP request found. Please try again.";
    } elseif ($userOtp != $_SESSION['otp']) {
        $message = "❌ Invalid OTP. Try again.";
    } elseif ((time() - $_SESSION['otp_time']) > 300) { // OTP valid for 5 min
        $message = "⚠️ OTP expired. Please request a new one.";
        unset($_SESSION['otp'], $_SESSION['form_data'], $_SESSION['otp_time']);
    } else {
        $name   = $_SESSION['form_data']['name'];
        $mobile = $_SESSION['form_data']['mobile'];

        // ✅ Save to DB after OTP success
        $conn = new mysqli("localhost", "root", "", "testdb");
        $stmt = $conn->prepare("INSERT INTO form_submissions (ip_address, name, mobile, verified, last_submit_time) VALUES (?, ?, ?, 1, NOW())");
        $stmt->bind_param("sss", $ip, $name, $mobile);
        $stmt->execute();

        $message = "🎉 Form submitted successfully and OTP verified!";
        unset($_SESSION['otp'], $_SESSION['form_data'], $_SESSION['otp_time']);
    }
}
?>

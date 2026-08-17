<?php

  require_once('recaptchalib.php');
  $privatekey = "6LcdgCwUAAAAAGyhVpux4JR6Avnq_dJyOUrPGr9s";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    
    echo "<script type='text/javascript'> window.location.href='GST.php?captchaError=true&fname=".$_POST['fname']."&lname=".$_POST['lname']."&companyname=".$_POST['companyname']."&companystatus=".$_POST['companystatus']."&designation=".$_POST['designation']."&email=".$_POST['email']."&mobile=".$_POST['mobile']."&city=".$_POST['city']."&event=".$_POST['event']."&member=".$_POST['member']."&service=".$_POST['service']."&query=".$_POST['query']."';</script>";
   die("Capcha error detected");
  
   
  } else {
    // Your code here to handle a successful verification
  }
  

$fname = $lname = $companyname = $companystatus = $designation  = $email = $mobile = $city = $event = $member = $service = $query = "";
$to = "directory@smechamber.in";
$sub = "Enquiry from GST Help Desk";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        $error = "Please Enter Your First Name ";
    } else {
        $fname = $_POST['fname'];
    }
      if (empty($_POST['lname'])) {
        $error = "Please Enter Your Last Name";
    } else {
        $lname = $_POST['lname'];
    }
     if (empty($_POST['companyname'])) {
        $error = "Please Enter Company Name";
    } else {
        $companyname = $_POST['companyname'];
    }
       if (empty($_POST['companystatus'])) {
        $error = "Please Select Company Status";
    } else {
        $companystatus = $_POST['companystatus'];
    }
      if (empty($_POST['designation'])) {
        $error = "Please Enter Designation";
    } else {
        $designation = $_POST['designation'];
    }
      if (empty($_POST['email'])) {
        $error = "Please Enter Email Address";
    } else {
        $email = $_POST['email'];
    }
           if (empty($_POST['mobile'])) {
        $error = "Please Enter Mobile Number";
    } else {
        $mobile = $_POST['mobile'];
    }
    if (empty($_POST['city'])) {
        $error = "Enter City";
    } else {
        $city = $_POST['city'];
    }
    if (empty($_POST['event'])) {
        $error = "Interested to Attend Event ?";
    } else {
        $event = $_POST['event'];
    }
    if (empty($_POST['member'])) {
        $error = "Interested to Become Member ?";
    } else {
        $member = $_POST['member'];
    }
      if (empty($_POST['service'])) {
        $error = "Interested to Avail Services from Chamber ?";
    } else {
        $service = $_POST['service'];
    }
       if (empty($_POST['query'])) {
        $error = "Write Your Query Regarding GST";
    } else {
        $query = $_POST['query'];
    }
   
}

$fnlmsg1 = "$fname $lname $companyname $companystatus $designation $email $mobile $city $event $member $service $query";
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['companyname'] = $_POST['companyname'];
$_SESSION['companystatus'] = $_POST['companystatus'];
$_SESSION['designation'] = $_POST['designation'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['mobile'] = $_POST['mobile'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['event'] = $_POST['event'];
$_SESSION['member'] = $_POST['member'];
$_SESSION['service'] = $_POST['service'];
$_SESSION['query'] = $_POST['query'];


ob_start();
include './gst-compose.php';
$message = ob_get_clean();
if (empty($error)) {

// mail($to, $sub, " Name : $name\n E-mail : $email\n Message : $msg");
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'From: Sme Chamber of India Query regarding GST' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to, $sub, $message, $headers);

    echo '<script language="javascript">';
    echo 'alert("Thank you for Submitting Information.");';
    echo 'window.location.href="index.php";';
    echo '</script>';
} else {
    echo "<script type='text/javascript'>alert('$error'); window.location.href='GST.php';</script>";
}
?>
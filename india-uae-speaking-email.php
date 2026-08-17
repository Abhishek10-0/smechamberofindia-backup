<?php session_start() ?>

<?php


//
//  require_once('recaptchalib.php');
//  $privatekey = "6LdkNlIUAAAAANQahCW_Uq8GtcCzb0fBzaZtHl7O";
//  $resp = recaptcha_check_answer ($privatekey,
//                                $_SERVER["REMOTE_ADDR"],
//                                $_POST["recaptcha_challenge_field"],
//                                $_POST["recaptcha_response_field"]);
//
//  if (!$resp->is_valid) {
//    // What happens when the CAPTCHA was entered incorrectly
//    
//    echo "<script type='text/javascript'> window.location.href='event-form.php?captchaError=true&title=".$_POST['title']."&fname=".$_POST['fname']."&lname=".$_POST['lname']."&designation=".$_POST['designation']."&companyname=".$_POST['companyname']."&businessactivity=".$_POST['businessactivity']."&businesssector=".$_POST['businesssector']."&businessinterest=".$_POST['businessinterest']."&lookingsupport=".$_POST['lookingsupport']."&mobilenumber=".$_POST['mobilenumber']."&phonenumber=".$_POST['phonenumber']."&email=".$_POST['email']."&address=".$_POST['address']."';</script>";
//   die("Capcha error detected");
//  
//   
//  } else {
//    // Your code here to handle a successful verification
//  }
  


$title = $fname = $lname= $designation = $companyname  = $mobilenumber = $email = $topic = $captcha = "";
$to = "director@smechamber.com";
$sub = "Register name For Speaking Opportunity in INDIA - UAE Business Summit Event";


if(isset($_POST['title']))
 $title=$_POST['title'];
if(isset($_POST['fname']))
$fname=$_POST['fname'];
if(isset($_POST['lname']))
$lname=$_POST['lname'];
if(isset($_POST['designation']))
 $designation=$_POST['designation'];
if(isset($_POST['companyname']))
$companyname=$_POST['companyname'];
if(isset($_POST['mobilenumber']))
$mobilenumber=$_POST['mobilenumber'];
if(isset($_POST['email']))
$email = $_POST['email'];
if(isset($_POST['topic']))
$topic=$_POST['topic'];
if(isset($_POST['g-recaptcha-response']))
$captcha=$_POST['g-recaptcha-response'];

if(!$captcha){
   echo "<script type='text/javascript'>alert('Please Check the Captcha form.');</script>";
//      echo 'alert("Thank you for Submitting Information.");';
// echo 'alert("Please Check the Captcha form.");';
exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdkNlIUAAAAANQahCW_Uq8GtcCzb0fBzaZtHl7O&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        else
        {
//          echo '<h2>Thanks for posting comment.</h2>';
        }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['title'])) {
        $error = "Please Select Name Title";
    } else {
        $title = $_POST['title'];
    }
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
      if (empty($_POST['designation'])) {
        $error = "Please Enter Designation";
    } else {
        $designation = $_POST['designation'];
    }
    if (empty($_POST['companyname'])) {
        $error = "Please Enter Company Name";
    } else {
        $companyname = $_POST['companyname'];
    }
    
        if (empty($_POST['mobilenumber'])) {
        $error = "Please Enter Mobile Number";
    } else {
        $mobilenumber = $_POST['mobilenumber'];
    }
    
    if (empty($_POST['email'])) {
        $error = "Please Enter Email";
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['topic'])) {
        $error = "Please Enter The Interest";
    } else {
        $topic = $_POST['topic'];
    }
 
   
}

$fnlmsg1 = "$title $fname $lname $designation $companyname $mobilenumber $email $topic";
$_SESSION['title'] = $_POST['title'];
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['designation'] = $_POST['designation'];
$_SESSION['companyname'] = $_POST['companyname'];
$_SESSION['mobilenumber'] = $_POST['mobilenumber'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['topic'] = $_POST['topic'];


ob_start();
include './india-uae-speaking-compose.php';
$message = ob_get_clean();
if (empty($error)) {

// mail($to, $sub, " Name : $name\n E-mail : $email\n Message : $msg");
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'From: Sme Chamber of India For Event Speaker Registration' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($to, $sub, $message, $headers);

    echo '<script language="javascript">';
    echo 'alert("Thank you for Submitting Information.");';
    echo 'window.location.href="index.php";';
    echo '</script>';
} else {
    echo "<script type='text/javascript'>alert('$error'); window.location.href='india-uae-speaking.php';</script>";
}
?>
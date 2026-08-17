<?php session_start() ?>
<?php

$fname = $companyname = $designation =  $mobilenumber = $email = $captcha = "";
$to = "director@smechamber.com";
$sub = "Clicked on Download Membership form for Indian Company, SME Chamber of India";

//if(isset($_POST['redirect_page_id']))
//$pageid=$_POST['redirect_page_id'];

if(isset($_POST['name']))
$fname=$_POST['name'];
if(isset($_POST['companyname']))
$companyname=$_POST['companyname'];
if(isset($_POST['designation']))
 $designation=$_POST['designation'];
if(isset($_POST['mobilenumber']))
$mobilenumber=$_POST['mobilenumber'];
if(isset($_POST['email']))
$email = $_POST['email'];
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
    if (empty($_POST['name'])) {
        $error = "Please Enter Your Name ";
    } else {
        $fname = $_POST['name'];
    }
    if (empty($_POST['companyname'])) {
        $error = "Please Enter Company Name";
    } else {
        $companyname = $_POST['companyname'];
    }
      if (empty($_POST['designation'])) {
        $error = "Please Enter Designation";
    } else {
        $designation = $_POST['designation'];
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
}

$fnlmsg1 = "$fname $companyname $designation  $mobilenumber $email";
$_SESSION['name'] = $_POST['name'];
$_SESSION['companyname'] = $_POST['companyname'];
$_SESSION['designation'] = $_POST['designation'];
$_SESSION['mobilenumber'] = $_POST['mobilenumber'];
$_SESSION['email'] = $_POST['email'];

ob_start();
include './downloadmembershipformcomp.php';
$message = ob_get_clean();
if (empty($error)) {
     echo '<script>';
     $url = 'downloadMembership-india-word.php';
     $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'From: click on event name ' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      mail($to, $sub, $message, $headers);
  echo "window.open('$url');".PHP_EOL;
    echo '</script>';
    echo '<script type="text/javascript">';
        echo 'window.location.href="index.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
        exit;
    
} else {
    echo "<script type='text/javascript'>alert('$error'); window.location.href='membership.php';</script>";
}

?>
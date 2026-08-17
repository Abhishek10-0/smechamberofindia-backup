<?php
/* [VERIFY CAPTCHA FIRST] */
$secret = '6Lf14ZcUAAAAAJh4QDTTCqjiXvT2HM9OW1zCelIr';
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

/* [PROCESS YOUR FORM] */
if ($verify->success) {
  $to = "dhayalan.iitcindia@gmail.com";
  $subject = "Add Name in Whatsapp Group - Chamber Web";
  $message .= "Title - " . $_POST['title'] . "\n";
  $message .= "First Name - " . $_POST['fname'] . "\n";
  $message .= "Last Name - " . $_POST['lname'] . "\n";
  $message .= "Company Name - " . $_POST['companyname'] . "\n";
  $message .= "Designation - " . $_POST['designation'] . "\n";
  $message .= "Mobile Number - " . $_POST['mobilenumber'] . "\n";
  $message .= "Email - " . $_POST['email'] . "\n";
  $message .= "City - " . $_POST['city'] . "\n";
  $message .= "Country - " . $_POST['country'] . "\n";
  $message .= "Business Activity - " . $_POST['businessactivity'] . "\n";
  $message .= "Business Interest - " . $_POST['businessinterest'] . "\n";
  if (@mail($to, $subject, $message)) {
    // Send mail OK - Show a nice thank you page or something
           echo '<script language="javascript">';
    echo 'alert("Thank You for Submitting Your Information.");';
    echo 'window.location.href="http://www.smechamberofindia.com";';
    echo '</script>';
  } else {
    // Send mail error... Ask user to retry or give alternative
 echo "<script type='text/javascript'>alert('Something Went Wrong, Try Again'); window.location.href='add-name-whatsapp.php';</script>";
  }
} else {
  // Invalid captcha - Ask user to retry
     echo '<script language="javascript">';
    echo 'alert("Invalid Captcha Please Select Right Captcha.");';
     echo 'window.location.href="add-name-whatsapp.php";';
    echo '</script>';
}
?>
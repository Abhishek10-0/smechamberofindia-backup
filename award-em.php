<?php

// require ReCaptcha class
//require('recaptcha-master/src/autoload.php');

// configure
// an email address that will be in the From field of the email.
$from = 'India SME Excellence Award Nomination Form <smechamberofindia.com>';

// an email address that will receive the email with the output of the form
$sendTo = 'SME Chamber of India <director@smechamber.com>';

// subject of the email
$subject = 'India SME Excellence Award Nomination Form';

// subject of the email
//$okMessage = 'alert("Thank you for registration. We will send nomination form very shortly, if you will not receive nomination form in 24hr.");';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('fullname' => 'Applicant Name', 'companyname' => 'Company Name', 'comm' => 'Commencement Date of Company', 'turnover' => 'Total turnover of 2018-19', 'business' => 'Industrial or business sector',  'mobile' => 'Mobile', 'email' => 'Email');

// message that will be displayed when everything is OK :)
$okMessage = "Thank you for registration. We will send nomination form very shortly, if you will not receive nomination form in 24hr. Please contact on director@smechamber.com";
 

//echo '<script language="javascript">';
//echo 'alert("Your Form has been Sent Successfully, we will get back to you ASAP.");';
//echo 'window.location.href="index.php";';
//echo '</script>';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

// ReCaptch Secret
//$recaptchaSecret = '6LdkNlIUAAAAANQahCW_Uq8GtcCzb0fBzaZtHl7O';sneha

// let's do the sending
// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try {
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception,
        // i.e. code stops executing and goes to catch() block

        /*if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key from https://www.google.com/recaptcha/admin

        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());

        // we validate the ReCaptcha field together with the user's IP address

        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }*/

        // everything went well, we can compose the message, as usually

        $emailText = "India SME Excellence Award Nomination form \n==============\n";

       foreach ($_POST as $key => $value) {
            // If the field exists in the $fields array, include it in the email
            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        $emailText .= "Select Category for Nomination :";
        foreach ($_POST['nomination'] as $value) {
            $check_msg .= "$value,";
        }
        $emailText .= $check_msg;

        // All the neccessary headers for the email.
        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );

        // Send email
        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
} catch (\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
} else {
    echo $responseArray['message'];
}
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "director@smechamber.com";
    $email_subject = "India SME Leadership Council - online form registration from SME Chamber web";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['title']) ||
        !isset($_POST['firstname']) ||
        !isset($_POST['lastname']) ||
        !isset($_POST['designation']) ||
        !isset($_POST['companyname']) ||
        !isset($_POST['businessactivity']) ||
        !isset($_POST['phonenumber']) ||
        !isset($_POST['email']) ||
        !isset($_POST['address']) ||
        !isset($_POST['city']) ||
        !isset($_POST['district']) ||
        !isset($_POST['country']) ||
        !isset($_POST['pincode']) ||
        !isset($_POST['turnover']) ||
        !isset($_POST['interest'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $title = $_POST['title']; // required
    $firstname = $_POST['firstname']; // required
    $lastname = $_POST['lastname']; // required
    $designation = $_POST['designation']; // not required
    $companyname = $_POST['companyname']; // required
    $businessactivity = $_POST['businessactivity']; // required
    $mobilenumber = $_POST['mobilenumber']; // required
    $phonenumber = $_POST['phonenumber']; // required
    $email = $_POST['email']; // required
    $address = $_POST['address']; // not required
    $city = $_POST['city']; // required
    $district = $_POST['district']; // required
    $country = $_POST['country']; // required
    $pincode = $_POST['pincode']; // required
    $turnover = $_POST['turnover']; // not required
    $interest = $_POST['interest']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $num_exp = '/^\d+$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$title)) {
    $error_message .= 'The Title you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$firstname)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$lastname)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$designation)) {
    $error_message .= 'The Designation you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$companyname)) {
    $error_message .= 'The Company Name you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$businessactivity)) {
    $error_message .= 'The Main Business activity you entered does not appear to be valid.<br />';
  }

    if(!preg_match($num_exp,$mobilenumber)) {
    $error_message .= 'The Mobile Number you entered does not appear to be valid.<br />';
  }

    if(!preg_match($num_exp,$phonenumber)) {
    $error_message .= 'The Phone Number you entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$address)) {
    $error_message .= 'The Address entered does not appear to be valid.<br />';
  }

    if(!preg_match($string_exp,$city)) {
    $error_message .= 'The City Name you entered does not appear to be valid.<br />';
  }

  if(!preg_match($string_exp,$district)) {
    $error_message .= 'The District Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$country)) {
    $error_message .= 'The Country Name you entered does not appear to be valid.<br />';
  }

 if(!preg_match($num_exp,$pincode)) {
    $error_message .= 'The Pincode you entered does not appear to be valid.<br />';
  }
 
  $num_str = '/[^a-z_\-0-9]/i';
  if(!preg_match($num_str,$turnover)) {
    $error_message .= 'The Turnover you entered does not appear to be valid.<br />';
  }

 if(!preg_match($string_exp, $interest)) {
  $error_message .= 'The Specific Interest you entered does not appear to be valid. <br/>';
 }

  // if(strlen($comments) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
    $email_message .= "Title: ".clean_string($title)."\n";
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Designation: ".clean_string($designation)."\n";
    $email_message .= "Company Name: ".clean_string($companyname)."\n";
    $email_message .= "Main Business Activity: ".clean_string($businessactivity)."\n";
    $email_message .= "Mobile Number: ".clean_string($mobilenumber)."\n";
    $email_message .= "Phone Number: ".clean_string($phonenumber)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "District: ".clean_string($district)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Pincode: ".clean_string($pincode)."\n";
    $email_message .= "Turnover of the company for FY 2018 - 19: ".clean_string($turnover)."\n";
    $email_message .= "Specific interest to join the Council : ".clean_string($interest)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header('Location: http://smeleadershipcouncil.com/');
?>
 
<!-- include your own success html here -->
 
<!-- Thank you for contacting us. We will be in touch with you very soon. -->
 
<?php
 
}
?>
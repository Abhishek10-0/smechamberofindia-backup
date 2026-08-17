<?php
session_start();
include("config.php");

//resend otp

if (isset($_GET['do'])) {
    
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_SESSION["phone"];

$rndno=rand(100000, 999999);
    
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://103.211.202.40/sendsms/bulksms_v2.php?apikey=c21lY2htOmlXejVvYkJD&type=TEXT&sender=SMECHM&entityId=1201158099447823312&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20SMECHM",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: b04b5d1c-1164-cc2c-1675-6833c1604270"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  $errMSGs = "Error :" . $err;
} else {
    unset($_SESSION["otp"]);
    $_SESSION['otp']=$rndno;
    header( "Location: membership_verify.php" );
}
}else{}

//verify otp
if (isset($_POST['form_otp'])) {

$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_SESSION['phone'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://103.211.202.40/sendsms/bulksms_v2.php?apikey=c21lY2htOmlXejVvYkJD&type=TEXT&sender=SMECHM&entityId=1201158099447823312&mobile=$mobileNumber&message=Thank%20you%20for%20registering%20with%20us.%20We%20will%20contact%20you%20shortly-SMECHM",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: b04b5d1c-1164-cc2c-1675-6833c1604270"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

if ($err) {
  $errMSGs = "Error :" . $err;
} else {
    if($httpcode == 200){
    
        $company_name=$_SESSION['company_name'];
                        $f_name=$_SESSION['f_name'];
                        $l_name=$_SESSION['l_name'];
                        $designation=$_SESSION['designation'];
                        $business_activity=$_SESSION['business_activity'];
                        $category=$_SESSION['category'];
                        $email=$_SESSION['email'];
                        $phone=$_SESSION['phone'];
                        $turnover=$_SESSION['turnover'];
                        $city=$_SESSION['city'];
                        $state=$_SESSION['state'];
                        $membership_type=$_SESSION['membership_type'];
                        $country=$_SESSION['country'];

                         /* Create connection 
                        $sql = "INSERT INTO forms (membership_type, f_name, l_name, designation, company_name, business_activity, category, email, turnover, phone, city, state, country) VALUES ('$membership_type', '$f_name', '$l_name', '$designation', '$company_name', '$business_activity', '$category', '$email', '$turnover', $phone', '$city', '$state', '$country')";*/

                        /* Create connection */
                        $sql = "INSERT INTO forms (membership_type, f_name, l_name, email, phone, designation, company_name, business_activity, category, city, state, country, turnover) VALUES ('$membership_type', '$f_name', '$l_name', '$email','$phone', '$designation', '$company_name', '$business_activity', '$category', '$city', '$state', '$country', '$turnover')";

                        if ($conn->query($sql) === TRUE) {
                            

                            # FIX: Replace this email with recipient email
                            # Sender Data
                            $subject = "SME Chamber Membership Registration For Indian Companies";
                            $f_name = trim($_SESSION["f_name"]);
                            $l_name = trim($_SESSION["l_name"]);
                            $designation = trim($_SESSION["designation"]);
                            $company_name = trim($_SESSION["company_name"]);
                            $business_activity = trim($_SESSION["business_activity"]);
                            $category = trim($_SESSION["category"]);
                            $turnover = trim($_SESSION["turnover"]);
                            $email = filter_var(trim($_SESSION["email"]), FILTER_SANITIZE_EMAIL);
                            $phone = trim($_SESSION["phone"]);
                            $city = trim($_SESSION["city"]);
                            $state = trim($_SESSION["state"]);
                            
                            $mail_to = $email;
                            //exit();
                            //$mail_to = "example@example.com , example@example.com";
                            
                            # Mail Content
                            $content = "Name: $f_name $l_name\n\n";
                            $content .= "Email: $email\n\n";
                            $content .= "Phone: $phone\n\n";
                            $content .= "Designation: $designation\n\n";
                            $content .= "Company Name: $company_name\n\n";
                            $content .= "Turnover in Crore: $turnover\n\n";
                            $content .= "Business activity: $business_activity\n\n";
                            $content .= "Interested for: $category\n\n";
                            $content .= "City: $city\n\n";
                            $content .= "State: $state\n\n";
                            
                            # email headers.
                            $headers = "From: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
                            $headers .= "To: $f_name $l_name <$email>" . "\r\n";
                            //$headers .= "Cc: rashmi.smechamber@gmail.com" . "\r\n";
                            //$headers .= "Cc: secretariat@smechamber.com" . "\r\n";
                            $headers .= "Bcc: gandhi@smechamber.in" . "\r\n";
                            $headers .= "Reply-To: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
                            $headers .= "Return-Path: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
                            $headers .= "Organization: SME Chamber of India" . "\r\n";
                            $headers .= "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
                            $headers .= "X-Priority: 3" . "\r\n";

                            // More headers
                            //Multiple BCC, same as CC above;
                            //$headers .= 'Bcc: example@gmail.com' . "\r\n";


                            # Send the email.
                            $success = mail($mail_to, $subject, $content, $headers);
                            if ($success) {
                                # Set a 200 (okay) response code.
                                http_response_code(200);
                                $successMSG = "Thank You! Your message has been sent.";
                                header( "Location: membership-success.php" );
                            } else {
                                # Set a 500 (internal server error) response code.
                                http_response_code(500);
                                $errMSGs = "Oops! Something went wrong, we couldn't send your message.";
                            }

        

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
    return true;
}else{
    $errMSGs = "failure";
}
}

}
else
{
    $errMSGs = "Incorrect OTP";
}
} else {}
?>



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" type="text/css" href="css/form-bootstrap.min.css" />
            
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/screen.css" />
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
        
</head>
    <body>

        <div id="wrapper">

            <?php include 'header.php'; ?>

            <div id="main">
                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1>Membership Registration Verification</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Form</li>
                </ul>
                    <section>
                        <div class="container" >
                            <div class="row">

                                <div class="col-md-4" style="float:none;margin:auto;padding: 30px;background: #f4f4f4;"> 
                                         <?php
                                          if (!empty($successMSG)) {
                                            echo '<div class="alert alert-success mb-4 alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                                                '.$successMSG.'
                                            </div>';
                                            }

                                            if (!empty($errMSGs)) {
                                            echo '<div class="alert alert-danger mb-4 alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                                                '.$errMSGs.'
                                            </div>';
                                            }
                                          ?>
                                  <h1>Become a Member - OTP Verfication</h1>
                                  <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
                                    <form action="" method="post">
                                      <div class="form-group">
                                        <label>Enter OTP <span class="emp">*</span></label>
                                        <input type="text" name="otpvalue" class="form-control" placeholder="OTP" maxlength="6" minlength="6" onkeypress="return isNumber(event)" required>
                                        <span>Did not receive OTP? <a href="membership-verification.php?do=resend">Resend</a></span>
                                      </div>
                                      <button onclick="goBack()" class="btn btn-default">Go Back</button>&nbsp;&nbsp;
                                      <input type="submit" name="form_otp" value="Verify OTP" class="btn btn-primary" />
                                    </form>
                                </div>
                                  
                            </div>      
                        </div>
                    </section>

                    <?php include 'footer.php'; ?>

            </div>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/script.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script>
        function goBack() {
          window.history.back();
        }
            
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        </script>
    </body>

</html>

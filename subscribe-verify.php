<?php
session_start();
include("config.php");

//resend otp

if (isset($_GET['do'])) {
	
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_SESSION["mobilenumber"];

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
	header( "Location: subscribe-verify.php" );
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
$mobileNumber = $_SESSION['mobilenumber'];

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
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

if ($err) {
  $errMSGs = "Error :" . $err;
} else {
	if($httpcode == 200){
	
        
                    	$name=$_SESSION['name'];
                    	
                    	$email=$_SESSION['email'];
                        $phone=$_SESSION['mobilenumber'];
                        $company_name=$_SESSION['company_name'];
                    	$designation=$_SESSION['designation'];
                    	

                        /* Create connection */
                        $sql = "INSERT INTO subscribe (name, email, mobile, company_name, designation) VALUES ('$name', '$email','$phone', '$company_name', '$designation')";

                        if ($conn->query($sql) === TRUE) {
                        	

                            # FIX: Replace this email with recipient email
                    		# Sender Data
                            $subject = "Subscribe to our Newsletter - SME Chamber of India";
                            $name = trim($_SESSION["name"]);
                            $company_name = trim($_SESSION["company_name"]);
                            $designation = trim($_SESSION["designation"]);
                            
                            $email = filter_var(trim($_SESSION["email"]), FILTER_SANITIZE_EMAIL);
                            $phone = filter_var(trim($_SESSION["mobilenumber"]), FILTER_SANITIZE_EMAIL);
                            $mail = "rashmi.smechamber@gmail.com";
                    		$mail_to = $mail;
                            //exit();
                            //$mail_to = "example@example.com , example@example.com";
                    		
                            # Mail Content
                            $content = "Name: $name\n";
                            $content .= "Email: $email\n";
                            $content .= "Phone: $phone\n";
                            $content .= "Company Name: $company_name\n";
                            $content .= "Designation: $designation\n";
                            
                    		
                            # email headers.
                            $headers = "From: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
                            $headers .= "To: gandhi@smechamber.in" . "\r\n";
							//$headers .= "Cc: rashmi.smechamber@gmail.com" . "\r\n";
							$headers .= "Cc: secretariat@smechamber.com" . "\r\n";
		                    //$headers .= "Bcc: gandhi@smechamber.in" . "\r\n";
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
                    			header( "Location: subscribe-success.php" );
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
        <title>Subscribe to our Newsletter | SME Chamber of India</title>
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
                                <h1>Subscribe to our Newsletter!</h1>
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
                                  <h1> OTP Verfication</h1>
                                  <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
									<form action="" method="post">
									  <div class="form-group">
										<label>Enter OTP <span class="emp">*</span></label>
										<input type="text" name="otpvalue" class="form-control" placeholder="OTP" maxlength="6" minlength="6" onkeypress="return isNumber(event)" required>
										<span>Did not receive OTP? <a href="subscribe-verify.php?do=resend">Resend</a></span>
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

<?php 
session_start();
include("config.php");


//resend otp
if (!empty($_GET['do'] == 'resend')) {
	
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
	header( "Location: sme_directory_verify.php" );
}
}else{}

//verify otp
if (isset($_POST['form_otp'])) 
{
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
//exit();
curl_close($curl);

if ($err) {
  $errMSGs = "Error :" . $err;
} else {
	if($httpcode == 200)
	{


$companyname=$_SESSION['companyname'];
//$title=$_SESSION['title'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$designation=$_SESSION['designation'];

$mobilenumber=$_SESSION['mobilenumber'];
$phonenumber=$_SESSION['phonenumber'];
$email=$_SESSION['email'];
//$alt_title=$_SESSION['alt_title'];
//$alt_fname=$_SESSION['alt_fname'];

//$alt_lname=$_SESSION['alt_lname'];
//$alt_phonenumber=$_SESSION['alt_phonenumber'];
//$alt_mobilenumber=$_SESSION['alt_mobilenumber'];
//$alt_email=$_SESSION['alt_email'];
$address=$_SESSION['address'];

$city=$_SESSION['city'];
$state=$_SESSION['state'];
$pincode=$_SESSION['pincode'];
$website=$_SESSION['website'];
$companyregistered=$_SESSION['companyregistered'];

//$udyognumber=$_SESSION['udyognumber'];
//$gst=$_SESSION['gst'];
$businesssector=$_SESSION['businesssector'];
$business_activity=$_SESSION['business_activity'];
$detservices=$_SESSION['detservices'];

$turnover_2023=$_SESSION['turnover_2023']; 
$turnover_22_23=$_SESSION['turnover_22_23'];
$turnover_21_22=$_SESSION['turnover_21_22'];
$no_employee=$_SESSION['no_employee'];
$domestic_markets=$_SESSION['domestic_markets'];

$Looking_for_support=$_SESSION['Looking_for_support'];
$Export=$_SESSION['Export'];
$financial_requirements=$_SESSION['financial_requirements'];
$potential_partners=$_SESSION['potential_partners'];
$enrol_membership=$_SESSION['enrol_membership'];

$achievements=$_SESSION['achievements']; 
$declaration=$_SESSION['declaration'];


//echo "$interestedfor";
	/*$sql = "INSERT INTO sme_directory(company_name, title, fname, lname, designation, phonenumber, mobilenumber, email, alttitle, altfname, altlname, altphonenumber, altmobilenumber, altemail, address, city, state, pincode, website, companyregistered, gst, udyognumber, businesssector, business_activities, detservices, no_employee, turnover2, turnover1, turnover3, domestic_market, Looking_for_support, Export, financial_requirements, potential_partners, enrol_membership, achievements, declaration) VALUES ('$companyname', '$title', '$fname','$lname','$designation','$phonenumber','$mobilenumber','$email', '$alt_title', '$alt_fname', '$alt_lname', '$alt_phonenumber', '$alt_mobilenumber', '$alt_email', '$address', '$city', '$state', '$pincode', '$website','$companyregistered','$udyognumber', '$gst', '$businesssector','$business_activity', '$detservices', '$no_employee', '$turnover_2023', '$turnover_22_23', '$turnover_21_22', '$domestic_markets', '$Looking_for_support', '$Export', '$financial_requirements', '$potential_partners', '$enrol_membership', '$achievements', '$declaration')"; */

    $sql = "INSERT INTO sme_directory(company_name, fname, lname, designation, phonenumber, mobilenumber, email, address, city, state, pincode, website, companyregistered, businesssector, business_activities, detservices, no_employee, turnover2, turnover1, turnover3, domestic_market, Looking_for_support, Export, financial_requirements, potential_partners, enrol_membership, achievements, declaration) VALUES ('$companyname', '$fname','$lname','$designation','$phonenumber','$mobilenumber','$email', '$address', '$city', '$state', '$pincode', '$website','$companyregistered', '$businesssector','$business_activity', '$detservices', '$no_employee', '$turnover_2023', '$turnover_22_23', '$turnover_21_22', '$domestic_markets', '$Looking_for_support', '$Export', '$financial_requirements', '$potential_partners', '$enrol_membership', '$achievements', '$declaration')";
		   
		   
    if ($conn->query($sql) === TRUE){	
		
# FIX: Replace this email with recipient email
		# Sender Data
        $subject = "SME Directory | SME Chamber of India";
        //$title = trim($_SESSION["title"]);
        $fname = trim($_SESSION["fname"]);
        $lname = trim($_SESSION["lname"]);
        $designation = trim($_SESSION["designation"]);
        $companyname = trim($_SESSION["companyname"]);
		
        $mobilenumber = trim($_SESSION["mobilenumber"]);
        $phonenumber = trim($_SESSION["phonenumber"]);
		 $email = filter_var(trim($_SESSION["email"]), FILTER_SANITIZE_EMAIL);
        /* $alt_title = trim($_SESSION["alt_title"]);
        $alt_fname = trim($_SESSION["alt_fname"]);
		
		$alt_lname = trim($_SESSION["alt_lname"]);
        $alt_phonenumber = trim($_SESSION["alt_phonenumber"]);
        $alt_mobilenumber = trim($_SESSION["alt_mobilenumber"]);
		$alt_email = filter_var(trim($_SESSION["alt_email"]), FILTER_SANITIZE_EMAIL); */
        $address = trim($_SESSION["address"]);
		
        $city = trim($_SESSION["city"]);
        $state = trim($_SESSION["state"]);
        $pincode = trim($_SESSION["pincode"]);
        $website = trim($_SESSION["website"]);
        $companyregistered = trim($_SESSION["companyregistered"]);
		
        /*  $udyognumber = trim($_SESSION["udyognumber"]);
        $gst = trim($_SESSION["gst"]); */
        $businesssector = trim($_SESSION["businesssector"]);
        $business_activity = trim($_SESSION["business_activity"]);
        $detservices = trim($_SESSION["detservices"]);
		
        $turnover_2023 = trim($_SESSION["turnover_2023"]);
        $turnover_22_23 = trim($_SESSION["turnover_22_23"]);
        $turnover_21_22 = trim($_SESSION["turnover_21_22"]);
        $no_employee = trim($_SESSION["no_employee"]);
        $domestic_markets = trim($_SESSION["domestic_markets"]);
        
        $Looking_for_support = trim($_SESSION["Looking_for_support"]);        
        $Export = trim($_SESSION["Export"]);        
        $financial_requirements = trim($_SESSION["financial_requirements"]);        
        $potential_partners = trim($_SESSION["potential_partners"]);        
        $enrol_membership = trim($_SESSION["enrol_membership"]);        
      
        $achievements = trim($_SESSION["achievements"]);
        $declaration = trim($_SESSION["declaration"]);
      
		$mail_to = $email;
        //$mail_to = "example@example.com , example@example.com";
		
        # Mail Content
		
        $content = "Name: $fname $lname\n";
        $content .= "Email: $email\n";
        $content .= "Contact Detail: $mobilenumber / $phonenumber\n";
        
        $content .= "Designation: $designation\n";
        $content .= "Company Name: $companyname\n";
        /* $content .= "Name of the marketing and purchase officer: $alt_title $alt_fname $alt_lname\n";
		$content .= "Contact Detail: $alt_mobilenumber / $alt_phonenumber\n";
		$content .= "Email: $alt_email\n"; */
		$content .= "Address: $address\n";
		$content .= "City: $city\n";
		$content .= "State: $state\n";
		$content .= "Pincode: $pincode\n";
		$content .= "Website: $website\n";
        $content .= "Company Registered as: $companyregistered\n";
        /* $content .= "MSME / Udyam Registration Number: $udyognumber\n";
        $content .= "GST Number: $gst\n"; */
        $content .= "Industrial or Business Sector: $businesssector'\n'";
        $content .= "Main Business activity: $business_activity'\n'";
        $content .= "Details of Products & Services offered: $detservices'\n'";
        $content .= "Turnover of Company for last 3 years (in Rs. Cr)'\n'";
        $content .= "Turnover 2025 - 2026: $turnover_2023'\n'";
        $content .= "Turnover 2024 - 2025: $turnover_22_23'\n'";
        $content .= "Turnover 2023 - 2024: $turnover_21_22'\n'";
       
        $content .= "Number of Employees: $no_employee'\n'";
        /*$content .= "Looking for support for Marketing, Branding and Promotion in the domestic markets: $domestic_markets'\n'";*/
        $content .= "Looking for support: $Looking_for_support'\n'";
        $content .= "Looking for support for Export Promotion or Import Facilitation details of products: $Export'\n'";
        $content .= "Financial Requirements (business growth | New projects | Expansion | To buy Capital goods or equipment | To buy industrial premises | Advanced technology): $financial_requirements'\n'";
        $content .= "Looking for support to identify enterprises or potential partners from India and abroad for: $potential_partners'\n'";
        $content .= "Interested to enrol membership: $enrol_membership'\n'";
        $content .= "Details of awards & recognitions for exemplary achievements for the last three years: $achievements'\n'";
        
        # email headers.
        $headers = "From: Directory - SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
        $headers .= "To: $fname $lname <$email>" . "\r\n";
		//$headers .= "Cc: secretariat@smechamber.com" . "\r\n";
		$headers .= "Bcc: gandhi@smechamber.in" . "\r\n";
		$headers .= "Reply-To: Directory - SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
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
            $_SESSION["successMSG"] = "Thank you for Adding Your Name In SME Directory.";
			header( "Location: form-success.php" );
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
                                <h1>Form Verification</h1>
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
                                  <h1>OTP Verfication</h1>
                                  <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
									<form action="" method="post">
									  <div class="form-group">
										<label>Enter OTP <span class="emp">*</span></label>
										<input type="text" name="otpvalue" class="form-control" placeholder="OTP" maxlength="6" minlength="6" onkeypress="return isNumber(event)" required>
										<span>Did not receive OTP? <a href="sme_directory_verify.php?do=resend">Resend</a></span>
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

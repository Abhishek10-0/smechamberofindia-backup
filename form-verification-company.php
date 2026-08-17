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
	header( "Location: form-verification-directory-old.php" );
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
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$designation=$_SESSION['designation'];
$mobilenumber=$_SESSION['mobilenumber'];
$phonenumber=$_SESSION['phonenumber'];
$WhatsApp=$_SESSION['WhatsApp'];
$birthday=$_SESSION['birthday'];
$Education=$_SESSION['Education'];
$email=$_SESSION['email'];
$Website=$_SESSION['Website'];
$linkedin=$_SESSION['linkedin'];


$altfname=$_SESSION['altfname'];
$altlname=$_SESSION['altlname'];
$altdesignation=$_SESSION['altdesignation'];
$altphonenumber=$_SESSION['altphonenumber'];
$altmobilenumber=$_SESSION['altmobilenumber'];
$altWhatsApp=$_SESSION['altWhatsApp'];
$altemail=$_SESSION['altemail'];
$altlinkedin=$_SESSION['altlinkedin'];

$address=$_SESSION['address'];
$City=$_SESSION['City'];
$State=$_SESSION['State'];
$Pincode=$_SESSION['Pincode'];
$companyregistered=$_SESSION['companyregistered'];
$year=$_SESSION['year'];
$cin=$_SESSION['cin'];
$gst=$_SESSION['gst'];

$udyognumber=$_SESSION['udyognumber'];

$status=$_SESSION['status'];

$businesssector=$_SESSION['businesssector']; 
$business_activities=$_SESSION['business_activities'];
$detail_product=$_SESSION['detail_product'];
$cin_no=$_SESSION['cin_no'];
$gst_no=$_SESSION['gst_no'];
$no_employee=$_SESSION['no_employee'];
$turnover_2021=$_SESSION['turnover_2021']; 
$turnover_2022=$_SESSION['turnover_2022']; 
$turnover_2020=$_SESSION['turnover_2020']; 
$no_employee=$_SESSION['no_employee']; 
$Allied_business=$_SESSION['Allied_business']; 

$Factory=$_SESSION['Factory']; 
$address1=$_SESSION['address1']; 
$City1=$_SESSION['City1']; 
$District1=$_SESSION['District1']; 
$State1=$_SESSION['State1']; 
$Pincode1=$_SESSION['Pincode1']; 
$Brief_profile=$_SESSION['Brief_profile']; 

$domestic_market=$_SESSION['domestic_market']; 
$inter_market=$_SESSION['inter_market'];
$require_product=$_SESSION['require_product'];

$interest_bank=$_SESSION['interest_bank']; 
$interest_connect=$_SESSION['interest_connect'];
$interest_import=$_SESSION['interest_import'];
$interest_acquire=$_SESSION['interest_acquire'];
$business_advisory=$_SESSION['business_advisory'];
$overseas_partners=$_SESSION['overseas_partners'];
$Marketing=$_SESSION['Marketing']; 

$declaration=$_SESSION['declaration']; 

//echo "$interestedfor";
	/* $sql = "INSERT INTO directory_new(CompanyName,Title, FirstName, LastName, Person_Designation, Contact_Tel, Contact_Mobile, 
	Contact_Email,LinkedIn_link,alt_title,alt_fname,alt_lname, alt_designation, alt_phonenumber, alt_mobilenumber, alt_email,
   alt_LinkedIn, Registered_Office_Address, Type_of_the_Company,Year_of_Establishment, CIN_No, GST_Number,
    Udyog_ARN, 	Status_of_the_Company, Company_Involved_in, Main_Business_Activities, Details_of_he_Products_Services,
    CIN_No_of_the_Company_Regn, GST_No_of_the_company, Number_of_Employee, Turnover2020_21, Turnover2021_22,
    Products_and_Services_for_Domestic_Markets, Products_and_Services_for_nternational_Markets, Requirements_of_Products_and_Services_raw_material_machines, Interested_for_bank_finance, Interested_to_connect_with_corporates,
    Interested_to_Import_Products, Interested_to_acquire, any_business_advisory_services, overseas_partners_for_joint_ventures, 
	Marketing_Promotion_Branding_Support, partners_for_distribution, looking_for_the_industrial_land, any_issues_and_grievances_related_to_specific_industries,
    looking_for_any_Government_schemes, receive_information_on_events, Any_other_suggestions_related_to_Government_services	)
         VALUES ('$companyname','$title','$fname','$lname','$designation','$phonenumber','$mobilenumber','$email',
		 '$linkedin','$alttitle','$altfname','$altlname','$altdesignation','$altphonenumber','$altmobilenumber',
		 '$altemail','$altlinkedin','$address','$companyregistered','$year','$cin','$gst','$udyognumber','$status','$businesssector',
		 '$business_activities','$detail_product','$cin_no','$gst_no','$no_employee','$turnover_2021','$turnover_2022','$domestic_market',
		 '$inter_market','$require_product','$interest_bank','$interest_connect','$interest_import','$interest_acquire','$business_advisory',
		 '$overseas_partners','$Marketing','$partners','$industrial_land','$issues_grievances','$Government_schemes','$receive_information',
		 '$Government_services')"; */
		
# FIX: Replace this email with recipient email
		# Sender Data
        $subject = "Your Company Information | SME Chamber of India";
        
		
		$mail_to = $email;
        //$mail_to = "example@example.com , example@example.com";
		
        # Mail Content
        $content = "Name: $fname $lname\n";
        $content .= "Contact Detail: $mobilenumber / $phonenumber / $WhatsApp\n";
		$content .= "Date of Birth: $birthday\n";
		$content .= "Education: $Education\n";
		$content .= "Designation: $designation\n";
		$content .= "Company Name: $companyname\n";
        $content .= "Email: $email\n";
        $content .= "Website: $Website\n";
        $content .= "linkedin: $linkedin\n";		
        
		$content .= "Name of the Senior Executive for Co-ordination" . "\n";
        $content .= "Name: $altfname $altlname\n";
		$content .= "Contact Detail: $altphonenumber / $altmobilenumber / $altWhatsApp\n";
		$content .= "Designation: $altdesignation\n";
		$content .= "Email: $altemail\n";
		$content .= "LinkIn: $altlinkedin\n";
        $content .= "Address: $address\n";
		$content .= "City: $City\n";
		$content .= "State: $State\n";
		$content .= "Pincode: $Pincode\n";
		
		$content .= "Registered or Head Office or Factory Address: $companyregistered\n";
        $content .= "Email: $altemail\n";
		$content .= "Email: $altemail\n";
		$content .= "Email: $altemail\n";
        
        $content .= "linkedin: $altlinkedin\n";		
		$content .= "Type of company: $companyregistered\n";
        $content .= "Udyog Aadhar Registration Number: $udyognumber\n";
        $content .= "Company Involved in : $businesssector\n";
		$content .= "Year of Establishment: $year\n";
        $content .= "CIN No: $cin\n";
        $content .= "GST Number: $gst\n";
		$content .= "Status of the Company: $status\n";
		
		$content .= "Details of the Products & Services : $detail_product\n";
		$content .= "CIN No. of the Company Regn: $cin_no\n";
        $content .= "GST No. of the company: $cin\n";
        $content .= "GST Number: $gst_no\n";
		$content .= "Number of Employees: $no_employee\n";
		$content .= "Turnover - Last two Years (in Rs. Lakhs): $turnover_2021, $turnover_2022\n";
		$content .= "Details of Products and Services for Domestic Markets: $domestic_market\n";
		$content .= "Details of Products and Services for International Markets: $inter_market \n";
		$content .= "Requirements of Products and Services / raw material/machines /equipment : $require_product\n";
		$content .= "Interested for bank finance, investment, private equity, venture capital, trade finance or any other financial support: $interest_bank\n";
        $content .= "Interested to connect with corporates, MNCs and SMEs for supply and procurement: $interest_connect\n";
		$content .= "Interested to Import Products / Services : $interest_import\n";
		$content .= "Interested to acquire latest & patented Technology, Machinery, Equipment : $interest_acquire\n";
		$content .= "looking for any business advisory services for business growth or expansion or diversification : $business_advisory\n";
		$content .= "looking for overseas partners for joint ventures, contract manufacturing, technology transfer or any other alliance : $overseas_partners\n";
		$content .= "looking for Marketing / Promotion / Branding Support services for local and global markets: $Marketing\n";
		$content .= "looking for partners for distribution, franchise or marketing alliance and vice-versa: $partners\n";
		$content .= "looking for the industrial land, industrial ready-made premises, plug & play facilities and Government services: $industrial_land\n"
		$content .= "any issues and grievances related to specific industries, Government authorities, regulatory authorities and other sectors: $issues_grievances\n";
		$content .= "looking for any Government schemes, advantages, benefits, incentives or other advantages: $Government_schemes\n";
        $content .= "interested to receive information on events, business alerts, business leads, business referrals, buyer-seller meet, Government meetings: $receive_information\n";
		$content .= "suggestions related to Government services: $Government_services\n";
		
		# email headers.
        $headers = "From: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
        $headers .= "To: $fname $lname <$email>" . "\r\n";
		$headers .= "Cc: secretariat@smechamber.com" . "\r\n";
		$headers .= "Bcc: gandhi@smechamber.in" . "\r\n";
		$headers .= "Reply-To: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
		$headers .= "Return-Path: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
		$headers .= "Organization: SME Chamber of India" . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
		$headers .= "X-Priority: 3" . "\r\n";

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
										<span>Did not receive OTP? <a href="form-verification-directory.php?do=resend">Resend</a></span>
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

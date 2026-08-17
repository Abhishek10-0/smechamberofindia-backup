<?php
include('config-admin.php');
session_start();

if (isset($_POST['form_hash1'])) {
	
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "PIAIIN";
$mobileNumber = $_SESSION["phone"];

$rndno=rand(100000, 999999);
	
$curl = curl_init();

curl_setopt_array($curl, array(
			  CURLOPT_URL => "allroutetech.co.in/sendsms/bulksms_v2.php?apikey=c21lY2htOmJyYUdPUTgw&type=TEXT&sender=PIAIIN&entityId=1201158099447823312&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20PIAIIN",
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
$_SESSION['name']=$_POST['name'];

$_SESSION['designation']=$_POST['designation'];
$_SESSION['company_name']=$_POST['company_name'];
$_SESSION['business_activity']=$_POST['business_activity'];
$_SESSION['packaging_sector']=$_POST['packaging_sector'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['pincode']=$_POST['pincode'];
$_SESSION['country']=$_POST['country'];
$_SESSION['website']=$_POST['website'];
$_SESSION['category']=implode(', ',$_POST['category']);
$_SESSION['otp']=$rndno;
header( "Location: joinus-verification.php" );
}
} else {}
	?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Join Us| PIAI - Packaging Industry Association of India</title>

	   <?php include("includes/header.php"); ?>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>JOIN US</h1></a>
					<div class="pull-right">
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;JOIN US
					</div>
				</div>
			</div>

		<!--	<iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/d/embed?mid=z2qirMhgTWQA.kXIVQWqn-ONc"></iframe>-->

		 	<div class="panel panel-default">
        <div id="collapseOpenThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="col-md-6" style="float:none;margin:auto;padding: 30px;background: #004d6b; color:#ffffff;"> 
              <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
              <form action="" method="post">
                <div class="form-group">
                	<label>Name <span class="emp">*</span></label>
                	<input type="text" name="name" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                	<label>Designation <span class="emp">*</span></label>
                	<input type="text" class="form-control" name="designation" placeholder="Designation" required="">
                </div>
								<div class="form-group">
                	<label>Company Name <span class="emp">*</span></label>
                	<input type="text" name="company_name" class="form-control" placeholder="Company Name" required="">
                </div>
								<div class="form-group">
                	<label>Business Activity <span class="emp">*</span></label>
                	<input type="text" name="business_activity" class="form-control" placeholder="Business Activity" required="">
                </div>
                <div class="form-group">
                	<label>Packaging Sector <span class="emp">*</span></label>
                	<input type="text" name="packaging_sector" class="form-control" placeholder="Packaging Sector" required="">
                </div>
                <div class="form-group">
                	<label>Email <span class="emp">*</span></label>
                	<input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
								<div class="form-group">
                	<label>Mobile Number (to generate OTP) <span class="emp">*</span></label>
                	<input type="text" class="form-control" name="phone" placeholder="10 digit number" maxlength="10" minlength="10" pattern="\d{10}$" title="Please enter exactly 10 digits" onkeypress="return isNumber(event)" required="">
                </div>
								<div class="form-group">
                	<label>Pincode <span class="emp">*</span></label>
                	<input type="text" class="form-control" name="pincode" placeholder="Pincode" required="">
                </div>
                <div class="form-group">
                	<label>Country <span class="emp">*</span></label>
                	<input type="text" class="form-control" name="country" placeholder="Country" required="">
                </div>
                <div class="form-group">
                	<label>Website <span class="emp">*</span></label>
                	<input type="text" class="form-control" name="website" placeholder="Website" required="">
                </div>
								<div class="form-group">
                	<label>Interested for  <span class="emp">*</span></label>
                	<div class="checkbox">
                    <label>
                	    <input type="checkbox" name="category[]" value="Looking for support for Domestic supply"> Looking for support for Domestic supply
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for support for Export promotion"> Looking for support for Export promotion
                		</label><br>
                  	<label>
                			<input type="checkbox" name="category[]" value="Looking for support to Import or overseas suppliers"> Looking for support to Import or overseas suppliers
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for advanced Technology or transfer"> Looking for advanced Technology or transfer
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for Investment or bank Finance"> Looking for Investment or bank Finance
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for Support for marketing"> Looking for Support for marketing
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for upgradation of Packaging unite"> Looking for upgradation of Packaging unite
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for Packaging Material"> Looking for Packaging Material  
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for Packaging machines or equipment’s"> Looking for Packaging machines or equipment’s
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking for overseas partner for Contract Manufacturing"> Looking for overseas partner for Contract Manufacturing
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Looking to buy running factory or industrial premises"> Looking to buy running factory or industrial premises
                		</label><br>
                		<label>
                			<input type="checkbox" name="category[]" value="Consent to receive business and Events alerts"> Consent to receive business and Events alerts
                		</label>
                	</div>
                </div>
								
								<input type="submit" name="form_hash1" value="Submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include("includes/footer.php"); ?>
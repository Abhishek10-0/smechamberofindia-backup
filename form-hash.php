<?php
include('config.php');
session_start();

if (isset($_POST['form_hash'])) {
	
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_POST["phone"];

$rndno=rand(100000, 999999);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://198.15.88.194/sendsms/bulksms.php?username=$username&password=$password&type=$type&sender=$sender&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process.%20-%20SMECHM",
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
$_SESSION['businesssector']=implode(',',$_POST['businesssector']);
$_SESSION['product_details']=$_POST['product_details'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['city']=$_POST['city'];
$_SESSION['state']=$_POST['state'];
$_SESSION['otp']=$rndno;
header( "Location: otp-verify.php" );
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
</head>
    <body>

        <div id="wrapper">

            <?php include 'header.php'; ?>

            <div id="main">
                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1>Form</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Form</li>
                </ul>
                    <section class="" >
                        <div class="container" >
                            <div class="row">

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
								<div class="col-md-6" style="float:none;margin:auto;padding: 30px;background: #f4f4f4;"> 
                                  <h1>Become a Member</h1>
                                  <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
								<form action="" method="post">
								  <div class="form-group">
									<label>Name <span class="emp">*</span></label>
									<input type="text" name="name" class="form-control" placeholder="Full Name" required>
								  </div>
								  <div class="form-group">
									<label>Email <span class="emp">*</span></label>
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								  </div>
								  <div class="form-group">
									<label>Mobile <span class="emp">*</span></label>
									<input type="text" class="form-control" name="phone" placeholder="add 91 before 10 digit number" maxlength="12" minlength="12" pattern="\d{12}$" title="Please enter exactly 12 digits" onkeypress="return isNumber(event)" required>
								  </div>
								  <div class="form-group">
									<label>Designation <span class="emp">*</span></label>
									<input type="text" class="form-control" name="designation" placeholder="Designation" required>
								  </div>
								  <div class="form-group">
									<label>Company Name <span class="emp">*</span></label>
									<input type="text" class="form-control" name="company_name" placeholder="Company Name" required>
								  </div>
								  <div class="form-group">
									<label>Details about Products & Services <span class="emp">*</span></label>
									<input type="text" class="form-control" name="product_details" placeholder="Details about Products & Services" required>
								  </div>
								  <div class="form-group">
									<label>Company involved in <span class="emp">*</span></label>
										<div class="checkbox">
											<label>
											  <input type="checkbox" name="businesssector[]" value="Manufacturing"> Manufacturing
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Service Sector"> Service Sector
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Engineering"> Engineering
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Electronics"> Electronics
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Automotive"> Automotive
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Chemical"> Chemical
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Plastic"> Plastic
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="IT"> IT
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Oil & Gas"> Oil & Gas
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="ICT"> ICT
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Pharmaceutical"> Pharmaceutical
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Textiles"> Textiles
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Infrastructure"> Infrastructure
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Construction"> Construction
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Food Processing"> Food Processing
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Packaging"> Packaging
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Paper"> Paper
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Printing"> Printing
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Glass"> Glass
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Education"> Education
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Healthcare"> Healthcare
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Agro Based Industries"> Agro Based Industries
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Distribution"> Distribution
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Ecommerce"> Ecommerce
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Hospitality"> Hospitality
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Logistics"> Logistics
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Marketing"> Marketing
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="FMCG"> FMCG
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Financial Services"> Financial Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Insurance"> Insurance
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Export"> Export
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Import"> Import
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Branding"> Branding
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Professional Services"> Professional Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Media"> Media
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Entertainment"> Entertainment
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Industrial Products Supplier"> Industrial Products Supplier
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Retail"> Retail
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Government Services"> Government Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Consumer Goods & Services"> Consumer Goods & Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Utility Services"> Utility Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Human Resource & Employment Services"> Human Resource & Employment Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Industrial Services"> Industrial Services
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Transportation"> Transportation
											</label>
											<label>
											  <input type="checkbox" name="businesssector[]" value="Others"> Others
											</label>
										</div>
								  
								  </div>
								  <div class="form-group">
									<label>Membership for <span class="emp">*</span></label>
									  <select class="form-control" name="membership_for" required>
										  <option name="Indian Companies">Indian Companies</option>
										  <option name="Overseas Companies">Overseas Companies</option>
										  <option name="Financial & Alliad Institutes Companies">Financial & Alliad Institutes Companies</option>
									  </select>
								  </div>
								  <div class="form-group">
									<label>City <span class="emp">*</span></label>
									<input type="text" class="form-control" name="city" placeholder="City" required>
								  </div>
								  <div class="form-group">
									<label>State <span class="emp">*</span></label>
									<input type="text" class="form-control" name="state" placeholder="State" required>
								  </div>
                                  <input type="submit" name="form_hash" value="Submit" class="btn btn-primary" />
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

<?php session_start();
require 'config.php';

if (isset($_POST['form_hash'])) {
	
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_POST["mobilenumber"];

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

$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['title']=$_POST['title'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['designation']=$_POST['designation'];

$_SESSION['mobilenumber']=$_POST['mobilenumber'];
$_SESSION['phonenumber']=$_POST['phonenumber'];
$_SESSION['email']=$_POST['email'];
$_SESSION['alt_title']=$_POST['alt_title'];
$_SESSION['alt_fname']=$_POST['alt_fname'];

$_SESSION['alt_lname']=$_POST['alt_lname'];
$_SESSION['alt_phonenumber']=$_POST['alt_phonenumber'];
$_SESSION['alt_mobilenumber']=$_POST['alt_mobilenumber'];
$_SESSION['alt_email']=$_POST['alt_email'];
$_SESSION['address']=$_POST['address'];

$_SESSION['city']=$_POST['city'];
$_SESSION['state']=$_POST['state'];
$_SESSION['pincode']=$_POST['pincode'];
$_SESSION['website']=$_POST['website'];
$_SESSION['companyregistered']=$_POST['companyregistered'];

$_SESSION['udyognumber']=$_POST['udyognumber'];
$_SESSION['gst']=$_POST['gst'];
$_SESSION['businesssector']=implode(',',$_POST['businesssector']);
$_SESSION['business_activity']=$_POST['business_activity'];
$_SESSION['detservices']=$_POST['detservices'];

$_SESSION['turnover_2023']=$_POST['turnover_2023'];
$_SESSION['turnover_22_23']=$_POST['turnover_22_23'];
$_SESSION['turnover_21_22']=$_POST['turnover_21_22'];
$_SESSION['no_employee']=$_POST['no_employee'];
$_SESSION['domestic_markets']=$_POST['domestic_markets'];

$_SESSION['Looking_for_support']=implode(',',$_POST['Looking_for_support']);
$_SESSION['Export']=$_POST['Export'];
$_SESSION['financial_requirements']=implode(',',$_POST['financial_requirements']);
$_SESSION['potential_partners']=implode(',',$_POST['potential_partners']);
$_SESSION['enrol_membership']=$_POST['enrol_membership'];

$_SESSION['achievements']=$_POST['achievements'];
$_SESSION['declaration']=$_POST['declaration'];

$_SESSION['otp']=$rndno;
header( "Location: sme_directory_verify.php" );
}
} else {}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SME Directory | SME Chamber Of India</title>
        <meta name="keywords" content="SME Directory, directory, SME Chamber of India Directory, ADD Name in SME Directory">
        <meta name="description" content="SME Directory, directory, SME Chamber of India Directory, ADD Name in SME Directory">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/form.css" media="screen"/>

        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/screen.css" />
        <link rel="stylesheet" type="text/css" href="css/screen.form.css" />
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
		
		<style>
	.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, 
	.col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, 
	.col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, 
	.col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}

@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  <!--.col-md-offset-1 {
    margin-left: 8.33333333%;
  }-->
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
#banner img {
    height: 425px;
}
a.bx-prev {
    display: none;
}
a.bx-next {
    display: none;
}
</style>

 <style>

.container1 {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container1 header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container1 .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
  font-weight: 700;
}
.form :where(.input-box input, .select-box),  input[type="text"], input[type="email"] {
  position: relative;
  height: 40px;
  width: 95%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
  width: 20%;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
  font-size: 14px;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
.column input[type="text"] {
    width: 90%;
}
label {
    font-size: 1.2em;
}
input[type="checkbox"] {
    margin-top: -2px;
}
 </style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YVPVYK16TG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-YVPVYK16TG');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YVPVYK16TG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-YVPVYK16TG');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '784564702179617');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=784564702179617&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code -->
</head>
  <body>
    <div id="wrapper"> 
      <?php include 'header.php'; ?>
      <div id="main">
        <div id="banner" style="height: 75px;">
          <div id="inner-banner">
            <div class="container">
              <div class="row-fluid">
                <h1 style="text-transform: capitalize;">Add Your Name In SME Directory</h1>
              </div>
            </div>
          </div>
        </div>
        <ul class="breadcrumb" style="padding-left: 85px;">
          <li><a href="index.php">Home</a></li>
          <li>SME Directory</li>
        </ul>			
	      <section class="container">
        	<div class="row">
        	  <div class="span1">
        	  </div>
        	  <div class="span10" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); padding: 25px ">
              <h1 style="text-align:center;">Add Your Name In SME Directory</h1>
                <form method="post" action=""  class="form" enctype = "multipart/form-data">
        		      <div class="column">
                    <div class="input-box">
                      <label class="control-label" >First Name <span class="emp">*</span></label>
                      <input name="fname" type="text" id="fname" class="text" placeholder="first name" required value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label>Last Name <span class="emp">*</span></label>
                      <input name="lname" type="text" id="lname" class="text" placeholder="last name" required value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>">
                    </div>
                  </div>		
              		<div class="column">
                    <div class="input-box">
                      <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                      <input name="companyname" type="text" id="companyname" placeholder="Company Name" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
                      <input name="designation" type="text" id="designation" placeholder="Designation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
                    </div>
                  </div>
                  <div class="column">
                    <div class="input-box">
                      <label>Phone Number <span class="emp">*</span></label>
                     <input type="text" name="phonenumber" id="phonenumber" placeholder="Tel" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" <?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>>
                    </div>
                    <div class="input-box">
                      <label>Mobile Number <span class="emp">*</span></label>
                      <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No*." maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                    </div>
                  </div>
		
		              <div class="input-box">
                    <label>Email Address <span class="emp">*</span></label>
                    <input name="email" type="email" class="text" placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                  </div>
              	  <div class="input-box">
              	    <h3 style="font-weight:600;">Name of the marketing and purchase officer </h3>                       
                  </div>		 
		              <div class="column">		  
                    <div class="input-box">          		  
                      <label>First Name  <span class="emp">*</span></label>
                      <input name="alt_fname" type="text" id="alt_fname" class="text" placeholder="first name" required value="<?php echo isset($_GET['alt_fname']) ? $_GET['alt_fname'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label>Last Name <span class="emp">*</span></label>
                    <input name="alt_lname" type="text" id="alt_lname" class="text" placeholder="last name" required value="<?php echo isset($_GET['alt_lname']) ? $_GET['alt_lname'] : "" ?>">
                    </div>
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                      <label>Phone Number <span class="emp">*</span></label>
                     <input type="text" name="alt_phonenumber" id="phonenumber" placeholder="Tel" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" value="<?php echo isset($_GET['alt_phonenumber']) ? $_GET['alt_phonenumber'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label>Mobile Number <span class="emp">*</span></label>
                      <input type="text" name="alt_mobilenumber" id="mobilenumber" placeholder="Mobile No*." maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['alt_mobilenumber']) ? $_GET['alt_mobilenumber'] : "" ?>">
                    </div>
                  </div>
		
          		    <div class="input-box">
                    <label>Email Address <span class="emp">*</span></label>
                    <input name="alt_email" type="email" id="email" class="text" placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['alt_email']) ? $_GET['alt_email'] : "" ?>">
                  </div>
		
          		    <div class="input-box">
                    <label>Registered Office Address<span class="emp">*</span></label>
                    <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                       <label>City <span class="emp">*</span></label>
                       <input name="city" type="text" id="city" class="text" required value="<?php echo isset($_GET['city']) ? $_GET['city'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label>State <span class="emp">*</span></label>
                      <input name="state" type="text" id="state" class="text" required value="<?php echo isset($_GET['state']) ? $_GET['state'] : "" ?>">
                    </div>
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                      <label>Pincode <span class="emp">*</span></label>
                      <input name="pincode" type="text" id="pincode" class="text" required value="<?php echo isset($_GET['pincode']) ? $_GET['pincode'] : "" ?>">
                    </div>
                    <div class="input-box">
                      <label>Website <span class="emp">*</span></label>
                      <input name="website" type="text" id="website" class="text" value="<?php echo isset($_GET['website']) ? $_GET['website'] : "" ?>">
                    </div>
                  </div>
				
          		    <div class="input-box">
                    <label>Company Registered as <span class="emp">*</span></label>
                      <div class="select-box">
                        <select name="companyregistered" id="companyregistered" class="select" required >
                          <option value="">Select</option>
                  				<option value="Private Limited">Private Limited</option>
                  				<option value="Partnership Firm">Partnership Firm</option>
                  				<option value="Start-Ups">Start-Ups</option>
                  				<option value="LLP">LLP</option>
                  				<option value="OPC">OPC</option>
                  				<option value="Proprietorship">Proprietorship</option>
                  				<option value="Public Limited">Public Limited</option>
                  				<option value="Others">Others</option>
                  			</select>
                      </div>
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                      <label>MSME / Udyam Registration Number <span class="emp">*</span></label>
                      <input name="udyognumber" type="text" id="udyognumber" class="text" <?php echo isset($_GET['udyognumber']) ? $_GET['udyognumber'] : "" ?>>
                   </div>
                    <div class="input-box">
                      <label>GST Number <span class="emp">*</span></label>
                      <input name="gst" type="text" id="gst" class="text" <?php echo isset($_GET['gst']) ? $_GET['gst'] : "" ?>>
                    </div>
                  </div>
		
          		    <div class="gender-box">
                    <h3>Industrial or Business Sector <span class="emp">*</span></h3>
                    <div class="gender-option">
                      <div class="gender" >
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Manufacturing"><label for="Manufacturing">Manufacturing  </label>
                      </div>
                      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Engineering"><label for="Engineering">Engineering  </label>
                      </div>
                      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Electronics"><label for="Electronics">Electronics </label>
                      </div>			
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Electricals"><label for="Electricals">Electricals</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Automotive"><label for="Automotive">Automotive </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Chemical"><label for="Chemical">Chemical </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Plastic"><label for="Plastic">Plastic  </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="IT"><label for="IT">IT</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Oil & Gas"><label for="Oil & Gas">Oil & Gas </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="ICT"><label for="ICT">ICT </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Pharmaceutical"><label for="Pharmaceutical">Pharmaceutical </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Textiles"><label for="Textiles">Textiles</label>
                      </div>
			                <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Infrastructure"><label for="Infrastructure">Infrastructure</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Packaging"><label for="Packaging">Packaging </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Food Processing"><label for="Food Processing">Food Processing</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Printing"><label for="Printing">Printing</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Paper"><label for="Paper">Paper </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Glass"><label for="Glass">Glass </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Healthcare"><label for="Healthcare">Healthcare</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Distribution"><label for="Distribution">Distribution</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="E-commerce"><label for="E-commerce">E-commerce</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Service Sector"><label for="Service Sector">Service Sector</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Franchise"><label for="Franchise">Franchise</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Logistics"><label for="Logistics">Logistics</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Marketing"><label for="Marketing">Marketing</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Education"><label for="Education">Education</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="FMCG"><label for="FMCG">FMCG</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Financial Service"><label for="Financial Service">Financial Service</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Insurance"><label for="Insurance">Insurance </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Hospitality"><label for="Hospitality">Hospitality </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Export"><label for="Export">Export </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Import"><label for="Import">Import </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Media"><label for="Media">Media </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Entertainment"><label for="Entertainment">Entertainment </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Retail"><label for="Retail">Retail </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Advertisement"><label for="Advertisement">Advertisement</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Industrial Services"><label for="Industrial Services">Industrial Services</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Utilities services"><label for="Utilities services">Utilities services </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Professional Services"><label for="Professional Services">Professional <br/>Services</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Government Services"><label for="Government Services">Government <br/>Services </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Realty & Construction"><label for="Realty & Construction ">Realty & <br/>Construction  </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Consumer Goods & Services"><label for="Consumer Goods & Services">Consumer Goods <br/>& Services</label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Human Resource & Employment Services"><label for="Human Resource & Employment Services">Human <br/>Resource & <br/>Employment <br/>Services </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Agro Based Industries"><label for="Agro Based Industries ">Agro Based <br/>Industries </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Sub sector of above segment "><label for="Sub sector of above segment ">Sub sector <br/>of above segment </label>
                      </div>
          			      <div class="gender">
                        <input name="businesssector[]" type="checkbox" id="businesssector" value="Other Sector (Please Specify)"><label for="Other Sector (Please Specify)">Other Sector <br/>(Please Specify)</label>
                      </div>
                    </div>
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                      <label>Main Business activity <span class="emp">*</span></label>
                      <input name="business_activity" type="text" id="business_activity" class="text" required value="<?php echo isset($_GET['business_activity']) ? $_GET['business_activity'] : "" ?>">
                    </div>
                    <div class="input-box">
                       <label>Details of Products & Services offered  <span class="emp">*</span></label>
                       <input name="detservices" type="text" id="detservices" class="text" <?php echo isset($_GET['detservices']) ? $_GET['detservices'] : "" ?>>
                    </div>
                  </div>
          				
          		    <h3 style="font-weight:600;">Turnover of Company for last 3 years (in Rs. Cr) </h3>
          		    <div class="column">

                    <?php
                      // Get current date
                      $currentDate = date('Y-m-d');
                      $month = date('m'); // 01-12
                      $year = date('Y');

                      // If current month is April (04) or later, it's the new financial year
                      if ($month >= 4) {
                           $fy_start = $year;
                           $fy_end = $year - 1;
                          

                          ;
                      } else {
                          // Before April, it's still the previous year's financial year
                          $fy_start = $year - 2;
                          $fy_end = $year - 1;
                          $fy_start1 = $year - 3;
                          $fy_end1 = $year - 2;
                          $fy_start2 = $year - 4;
                          $fy_end2 = $year - 3;
                      }

                      "Current Financial Year: " . $fy_start . "-" . $fy_end;
                      // Example: If today is 2026-03-26, output is 2025-2026
                    ?>

                    <div class="input-box">
                      <label>2025 - 2026 <span class="emp">*</span></label>
                      <input name="turnover_2023" type="text" id="turnover_2024" class="text" <?php echo isset($_GET['turnover_2023']) ? $_GET['turnover_2023'] : "" ?>>
                    </div>

                    <div class="input-box">
                      <label>2024 - 2025 <span class="emp">*</span></label>
                      <input name="turnover_22_23" type="text" id="turnover_22_23" class="text" <?php echo isset($_GET['turnover_22_23']) ? $_GET['turnover_22_23'] : "" ?>>
                    </div>
          		      <div class="input-box">
                      <label>2023 - 2024 <span class="emp">*</span></label>
                      <input name="turnover_21_22" type="text" id="turnover_21_22" class="text" <?php echo isset($_GET['turnover_21_22']) ? $_GET['turnover_21_22'] : "" ?>>
                    </div>
                  </div>
		
          		    <div class="column">
                    <div class="input-box">
                      <label>Number of Employees <span class="emp">*</span><br/>&nbsp;</label>
                      <input name="no_employee" type="text" class="text"  <?php echo isset($_GET['no_employee']) ? $_GET['no_employee'] : "" ?>>
                    </div>
                    <div class="input-box">
                      <label>Looking for support for Marketing, Branding and Promotion in the domestic markets <span class="emp">*</span></label>
                      <input name="domestic_markets" type="text" id="domestic_markets" class="text" <?php echo isset($_GET['domestic_markets']) ? $_GET['domestic_markets'] : "" ?>>
                    </div>
                  </div>
		
          		    <div class="gender-box">
                    <h3>Looking for support <span class="emp">*</span></h3>
                    <div class="gender-option">
                		  <div class="gender" >
                		    <input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Distributorship"><label for="Distributorship">Distributorship</label>
                			</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Franchises"><label for="Franchises">Franchises</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Channel Partners"><label for="Channel Partners">Channel Partners</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Selling Agencies"><label for="Selling Agencies">Selling Agencies</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Business Partners"><label for="Business Partners">Business Partners</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Chemical"><label for="Chemical">Chemical</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Buyers"><label for="Buyers">Buyers</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Suppliers"><label for="Suppliers">Suppliers</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Buying Agents"><label for="Buying Agents">Buying Agents</label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Consultants"><label for="Consultants">Consultants </label>
                  		</div>
                      <div class="gender">
                  			<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Service providers "><label for="Service providers ">Service providers </label>
                  		</div>            
                    </div>
                  </div>
		
          	      <div class="input-box">
                    <label>Looking for support for Export Promotion or Import Facilitation details of products <span class="emp">*</span></label>
                    <input name="Export" type="text" id="Export" class="text" <?php echo isset($_GET['Export']) ? $_GET['Export'] : "" ?>>
                  </div>
		
          		    <div class="gender-box">
                    <h3>Financial Requirements (business growth | New projects | Expansion | To buy Capital goods or equipment | To buy industrial premises | Advanced technology) <span class="emp">*</span></h3>
                    <div class="gender-option">
                      <div class="gender" >
                        <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Bank Finance"><label for="Bank Finance">Bank Finance</label>
                      </div>
          			      <div class="gender" >
                        <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Bank Finance"><label for="Bank Finance">Bank Finance</label>
          			      </div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Investment"><label for="Investment">Investment</label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Private Equity"><label for="Private Equity">Private Equity</label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Venture Capital"><label for="Venture Capital">Venture Capital</label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Trade finance"><label for="Trade finance">Trade finance</label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Collateral free loans"><label for="Collateral free loans">Collateral free loans</label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Unsecured loans "><label for="Unsecured loans ">Unsecured loans </label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Vendor finance "><label for="Vendor finance ">Vendor finance </label>
                			</div>
                			<div class="gender" >
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Project finance "><label for="Project finance ">Project finance </label>
                			</div>
                			<div class="gender" style="width:25%">
                			  <input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="External Commercial borrowings "><label for="External Commercial borrowings ">External Commercial <br/>borrowings </label>
                			</div>
                    </div>
                  </div>
		
		            <div class="gender-box">
                  <h3>Looking for support to identify enterprises or potential partners from India and abroad for <span class="emp">*</span></h3>
                  <div class="gender-option">
                    <div class="gender" style="width:20%">
                      <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Joint Venture"><label for="Joint Venture">Joint Venture</label>
        			      </div>
            			  <div class="gender" style="width:20%">
            			    <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Mergers"><label for="Mergers">Mergers</label>
            			  </div>
            			  <div class="gender" style="width:20%">
            			    <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Investment partner"><label for="Investment partner">Investment partner</label>
            			  </div>
            			  <div class="gender" style="width:20%">
            			    <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Technology Transfer"><label for="Technology Transfer">Technology Transfer</label>
            			  </div>
            			  <div class="gender" >
            			    <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Strategic partner for marketing & promotion"><label for="Strategic partner for marketing & promotion" style="padding-top: 15px">Strategic partner <br/>for marketing & <br/>promotion</label>
            			  </div>
			
            			  <div class="gender" >
            			    <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Ready-made Manufacturing unit for acquisition "><label for="Ready-made Manufacturing unit for acquisition ">Ready-made <br/>Manufacturing <br/>unit for acquisition </label>
            			  </div>
			 
			              <div class="gender" >			  
			                <input name="potential_partners[]" type="checkbox" id="potential_partners" value="Loan & License manufacturing"><label for="Loan & License manufacturing">Loan & License<br/> manufacturing</label>
			              </div>
                  </div>
                </div>
			
      		      <div class="input-box">
                  <label>Interested to enrol membership <span class="emp">*</span></label>
                  <div class="select-box">
                    <select name="enrol_membership" id="enrol_membership" class="select" required >
                      <option value="">Select</option>
              				<option value="Yes">Yes</option>
              				<option value="No">No</option>				
      			        </select>
      			        <script type="text/javascript">
                        document.getElementById('enrol_membership').value = "<?php echo $_GET['enrol_membership']; ?>";
                    </script>
                  </div>
                </div>
		
        		    <div class="input-box">
                  <label>Details of awards & recognitions for exemplary achievements for the last three years <span class="emp">*</span></label>
                  <input name="achievements" type="text" id="achievements" class="text" <?php echo isset($_GET['achievements']) ? $_GET['achievements'] : "" ?>>
                </div>
        		
        		    <div class="gender-box">
                  <h3>Declaration <span class="emp">*</span></h3>
                  <div class="gender-option">
                    <div class="gender" style="width:100%">
                      <input name="declaration"type="checkbox" id="eventchamber" value="SME Coaching" required value="">
        		          <label for="Above information is true and correct and can be used for business opportunities">
        		            Above information is true and correct and can be used for business opportunities</label>
        			      </div>
                  </div>
                </div>
		            <br/>		
	              <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>            
		            <button type="submit" value="Submit" name="form_hash">Submit</button>
              </form>
            </div>
          </div>
	      </section>
        <!--   footer section will come here  -->
        <?php  include 'footer.php'; ?>
      </div>
    </div>  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="js/styleswitch.js"></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>
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
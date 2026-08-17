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
  
$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['title']=$_POST['title'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['designation']=$_POST['designation'];
$_SESSION['phonenumber']=$_POST['phonenumber'];
$_SESSION['mobilenumber']=$_POST['mobilenumber'];
$_SESSION['WhatsApp']=$_POST['WhatsApp'];
$_SESSION['birthday']=$_POST['birthday'];
$_SESSION['Education']=$_POST['Education'];
$_SESSION['email']=$_POST['email'];
$_SESSION['Website']=$_POST['Website'];
$_SESSION['linkedin']=$_POST['linkedin'];

$_SESSION['alttitle']=$_POST['alttitle'];
$_SESSION['altfname']=$_POST['altfname'];
$_SESSION['altlname']=$_POST['altlname'];
$_SESSION['altdesignation']=$_POST['altdesignation'];
$_SESSION['altphonenumber']=$_POST['altphonenumber'];
$_SESSION['altmobilenumber']=$_POST['altmobilenumber'];
$_SESSION['altWhatsApp']=$_POST['altWhatsApp'];
$_SESSION['altemail']=$_POST['altemail'];
$_SESSION['altlinkedin']=$_POST['altlinkedin'];

$_SESSION['address']=$_POST['address'];
$_SESSION['City']=$_POST['City'];
$_SESSION['State']=$_POST['State'];
$_SESSION['Pincode']=$_POST['Pincode'];
$_SESSION['companyregistered']=$_POST['companyregistered'];
$_SESSION['year']=$_POST['year'];
$_SESSION['cin']=$_POST['cin'];
$_SESSION['gst']=$_POST['gst'];
$_SESSION['udyognumber']=$_POST['udyognumber'];
$_SESSION['status']=$_POST['status'];

$_SESSION['businesssector']=implode(',',$_POST['businesssector']);
$_SESSION['business_activities']=$_POST['business_activities'];
$_SESSION['detail_product']=$_POST['detail_product'];
//$_SESSION['cin_no']=$_POST['cin_no'];
//$_SESSION['gst_no']=$_POST['gst_no'];

$_SESSION['turnover_2022']=$_POST['turnover_2022'];
$_SESSION['turnover_2021']=$_POST['turnover_2021'];
$_SESSION['turnover_2020']=$_POST['turnover_2020'];
$_SESSION['no_employee']=$_POST['no_employee'];

$_SESSION['Allied_business']=$_POST['Allied_business'];
$_SESSION['Factory']=$_POST['Factory'];
$_SESSION['address1']=$_POST['address1'];
$_SESSION['City1']=$_POST['City1'];
$_SESSION['District1']=$_POST['District1'];
$_SESSION['State1']=$_POST['State1'];
$_SESSION['Pincode1']=$_POST['Pincode1'];

$_SESSION['Brief_profile']=$_POST['Brief_profile'];


$_SESSION['domestic_market']=$_POST['domestic_market'];
$_SESSION['inter_market']=$_POST['inter_market'];
$_SESSION['require_product']=$_POST['require_product'];
$_SESSION['interest_bank']=$_POST['interest_bank'];
$_SESSION['interest_connect']=$_POST['interest_connect'];
$_SESSION['interest_import']=$_POST['interest_import'];
$_SESSION['interest_acquire']=$_POST['interest_acquire'];

$_SESSION['business_advisory']=$_POST['business_advisory'];
$_SESSION['overseas_partners']=$_POST['overseas_partners'];
$_SESSION['Marketing']=$_POST['Marketing'];
$_SESSION['partners']=$_POST['partners'];
$_SESSION['declaration']=$_POST['declaration'];

$_SESSION['otp']=$rndno;
header( "Location: form-verification-company.php" );

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
       
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/form.css" media="screen"/>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
       
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
		
		
        <style>
		   .member-form label {
             width: 150px;
                 }
		   input:valid, textarea:valid {
   
            margin-right: 10px;
            }
			.form1 .field .control-label {
    color: #5c5c5c;
    width: 575px;
    padding: 10px 10px 10px 15px;
    float: left;
}
body{color: #000;overflow-x: hidden;height: 100%; }
.card{padding: 30px 40px; margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}
.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}
input, textarea, button, select#companyregistered{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}
input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}
.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}
button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
	.abcd label {
    width: 150px;
}	
.navbar.margin-none {
    display: none;
}
div#banner {
    height: 50px;
}
.form-control-label {
    font-weight: 600;
}
		</style>

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
                                <h1 style="text-transform: capitalize;">Add Your Company Information</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>SME Directory</li>
                </ul>
<section class="membership-form">
<div class="container" >
<div class="row-fluid">

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-12 col-lg-8 col-md-9 col-11 text-center">
           
            <div class="card">
                <h5 class="text-center mb-4">Add Your Company Information</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> 
						<input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> 
						<input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                    </div>
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Name of Company <span class="text-danger"> *</span></label> 
						<input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
						</div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Designation<span class="text-danger"> *</span></label> 
						<input name="designation" type="text" id="designation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
						</div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mobile Number<span class="text-danger"> *</span></label> 
						<input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No*." maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
						</div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> 
						<input type="text" name="phonenumber" id="phonenumber" placeholder="Tel"  maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" <?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>>
						</div>
                    </div>
                    <div class="row justify-content-between text-left">
                       <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">WhatsApp Number<span class="text-danger"> *</span></label> 
						<input type="text" name="WhatsApp" id="WhatsApp" placeholder="WhatsApp No*." maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['WhatsApp']) ? $_GET['WhatsApp'] : "" ?>">
                        </div>
						<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Date of Birth<span class="text-danger"> *</span></label> 
						<input type="date" id="birthday" name="birthday" style="width: 250px; padding: 10px;"> 
						</div>
                    </div>
					<div class="row justify-content-between text-left">
                       <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Education<span class="text-danger"> *</span></label> 
						<input name="Education" type="text" id="Education" class="text" required value="<?php echo isset($_GET['Education']) ? $_GET['Education'] : "" ?>"> </div>
						
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> 
						<input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>"> </div>
                    </div>
					
					 <div class="row justify-content-between text-left">
                       <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Website of the company<span class="text-danger"> *</span></label> 
						<input name="Website" type="url" id="Website" class="text" required value="<?php echo isset($_GET['Website']) ? $_GET['Website'] : "" ?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">LinkedIn link<span class="text-danger"> *</span></label> 
						<input name="linkedin" type="text" id="linkedin" class="text"  required value="<?php echo isset($_GET['linkedin']) ? $_GET['linkedin'] : "" ?>"> </div>
                    </div>
					<p style="text-align: left;">Name of the Senior Executive for Co-ordination</p>
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> 
						<input name="altfname" type="text" id="altfname" class="text" placeholder="first name"  required value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>">
                          </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> 
						<input name="altlname" type="text" id="altlname" class="text" placeholder="last name"  required value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>"> </div>
                    </div>
					
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Designation<span class="text-danger"> *</span></label> 
						<input name="altdesignation" type="text" id="altdesignation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">phonenumber<span class="text-danger"> *</span></label> 
						<input type="text" name="altphonenumber" id="phonenumber" placeholder="Tel"  maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>"> </div>
                    </div>
					
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mobile Number<span class="text-danger"> *</span></label> 
						<input type="text" name="altmobilenumber" id="mobilenumber" placeholder="Mobile No*."  maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                         </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">WhatsApp Number<span class="text-danger"> *</span></label> 
						<input type="text" name="altWhatsApp" id="altWhatsApp" placeholder="WhatsApp No*." maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['WhatsApp1']) ? $_GET['WhatsApp1'] : "" ?>"> </div>
                    </div>
					
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> 
						<input name="altemail" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>"> 
                         </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">LinkedIn link<span class="text-danger"> *</span></label> 
						<input name="altlinkedin" type="text" id="linkedin" class="text"  required value="<?php echo isset($_GET['linkedin']) ? $_GET['linkedin'] : "" ?>"> 
						</div>
                    </div>
					
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Registered or Head Office or Factory Address<span class="text-danger"> *</span></label> 
						<input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>"> 
                         </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">City<span class="text-danger"> *</span></label> 
						<input name="City" type="text" id="City" class="text" required value="<?php echo isset($_GET['City']) ? $_GET['City'] : "" ?>">
						</div>
                    </div>
					
						<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">State<span class="text-danger"> *</span></label> 
						<input name="State" type="text" id="State" class="text" required value="<?php echo isset($_GET['State']) ? $_GET['State'] : "" ?>">
                         </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pincode <span class="text-danger"> *</span></label> 
						<input name="Pincode" type="text" id="Pincode" class="text" required value="<?php echo isset($_GET['Pincode']) ? $_GET['Pincode'] : "" ?>">
						</div>
                    </div>
					
					<div class="row justify-content-between text-left">
					
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Type of the Company<span class="text-danger"> *</span></label> 
						<select name="companyregistered" id="companyregistered" class="select" required >
                                <option value="">Select</option>
                                <option value="Private Limited">Private Limited</option>
                                <option value="Partnership Firm">Public Ltd.</option>
                                <option value="LLP">Partnership Firm   </option>
                                <option value="Proprietorship">Start-Ups</option>
                                <option value="Public Limited">Proprietorship</option>
                                <option value="LLP">LLP</option>
                                <option value="Proprietorship">Co-Operative </option>
                                <option value="Public Limited">One Person Company</option>
                                <option value="Others">Others (Please Specify)</option>
                        </select>
                         </div>
						 
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Year of Establishment<span class="text-danger"> *</span></label> 
						<input name="year" type="text" id="management" class="text"  >
						</div>
                    </div>
					
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">CIN No<span class="text-danger"> *</span></label> 
						<input name="cin" type="text" id="management" class="text">
						</div>
						<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">GST Number<span class="text-danger"> *</span></label> 
						<input name="gst" type="text" id="management" class="text"  >
						</div>
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">MSME / Udyam Registration Number<span class="text-danger"> *</span></label> 
						<input name="udyognumber" type="text" id="udyognumber" class="text" >
						</div>
						<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Status of the Company<span class="text-danger"> *</span></label> 
						<select name="companyregistered" id="companyregistered" class="select" required >
                               <option value="">Select</option>
                               <option value="Private Limited">Micro Enterprise   </option>
                               <option value="Partnership Firm">Small Enterprise   </option>
                               <option value="LLP">Medium Enterprise     </option>
                               <option value="Proprietorship">Mid-Corporate   </option>
                               <option value="Public Limited">Corporate</option>
                               <option value="LLP">MNCs</option>
                               <option value="Proprietorship">Institute  </option>
                        </select>
						</div>
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Company Involved in  <span class="text-danger"> *</span></label> 
						<div class="controls" style="display: inline-flex;">
<div class="abcd" style="width: 700px;">
<label for="Manufacturing"><input name="businesssector[]" type="checkbox" id="businesssector" value="Manufacturing">Manufacturing  </label>
<label for="Engineering"><input name="businesssector[]" type="checkbox" id="businesssector" value="Engineering">Engineering  </label>
<label for="Auto & Auto Ancillary"><input name="businesssector[]" type="checkbox" id="businesssector" value="Auto & Auto Ancillary">Electronics </label>
<label for="Energy"><input name="businesssector[]" type="checkbox" id="businesssector" value="Energy">Electricals </label>
<label for="Infrastructure"><input name="businesssector[]" type="checkbox" id="businesssector" value="Infrastructure">Automotive</label>
<label for="FMCG"><input name="businesssector[]" type="checkbox" id="businesssector" value="FMCG">Chemical</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Industrial Services">Industrial Services</label>

<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Agro-Based Industries">Agro-Based Industries</label>
</div>

<div class="abcd" style="width: 600px;">
<label for="Exports"><input name="businesssector[]" type="checkbox" id="businesssector" value="Exports">Plastic </label>
<label for="Electricals"><input name="businesssector[]" type="checkbox" id="businesssector" value="Electricals">Textiles </label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Utilities services">Utilities services</label>
<label for="IT"><input name="businesssector[]" type="checkbox" id="businesssector" value="IT">IT & ICT</label>
<label for="Consumer Durables"><input name="businesssector[]" type="checkbox" id="businesssector" value="Consumer Durables">Paper</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Professional Services">Professional Services</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Other">Other Sector (Please Specify)</label>
</div>

<div class="abcd" style="width: 700px;">
<label for="Finance"><input name="businesssector[]" type="checkbox" id="businesssector" value="Finance">Infrastructure </label>
<label for="Realty & Construction "><input name="businesssector[]" type="checkbox" id="businesssector" value="Realty & Construction">Construction  </label>
<label for="Agro Based Industries "><input name="businesssector[]" type="checkbox" id="businesssector" value="Agro Based Industries">Food Processing </label>
<label for="ICT"><input name="businesssector[]" type="checkbox" id="businesssector" value="ICT">Packaging </label>
<label for="Service Sector"><input name="businesssector[]" type="checkbox" id="businesssector" value="Service Sector">Printing</label>


<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Entertainment">Entertainment</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Government Services">Government Services</label>

</div>

<div class="abcd" style="width: 700px;">
<label for="Media"><input name="businesssector[]" type="checkbox" id="businesssector" value="Media">Financial Service</label>

<label for="Healthcare"><input name="businesssector[]" type="checkbox" id="businesssector" value="Healthcare">Healthcare</label>


<label for="Chemicals"><input name="businesssector[]" type="checkbox" id="businesssector" value="Chemicals">Distribution </label>
<label for="Metal & Mining"><input name="businesssector[]" type="checkbox" id="businesssector" value="Metal & Mining">E-commerce</label>


<label for="Allied Industrial Sector"><input name="businesssector[]" type="checkbox" id="businesssector" value="Allied Industrial Secto">Insurance</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Consumer Goods & Services">Consumer Goods & Services</label>
<label for="Textiles"><input name="businesssector[]" type="checkbox" id="businesssector" value="Textiles">Glass</label>


</div>

<div class="abcd" style="width: 500px;">
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Retail">Retail</label>
<label for="Paper"><input name="businesssector[]" type="checkbox" id="businesssector" value="Paper">Logistics </label>
<label for="Plastic"><input name="businesssector[]" type="checkbox" id="businesssector" value="Plastic">Marketing  </label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Import">Import</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Hospitality">Hospitality</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Export">Export</label>
<label for="Oil & Gas"><input name="businesssector[]" type="checkbox" id="businesssector" value="Oil & Gas">Service Sector </label>
<label for="Packaging"><input name="businesssector[]" type="checkbox" id="businesssector" value="Packaging">Franchise </label>

</div>

<div class="abcd" style="width: 550px;">
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="Media">Media</label>
<label for="Others"><input name="businesssector[]" type="checkbox" id="businesssector" value="HR Services">HR Services</label>
<label for="Printing"><input name="businesssector[]" type="checkbox" id="businesssector" value="Printing">Education</label>
<label for="Advertisement"><input name="businesssector[]" type="checkbox" id="businesssector" value="Advertisement">FMCG</label>
<label for="Hospitality"><input name="businesssector[]" type="checkbox" id="businesssector" value="Hospitality">Oil & Gas </label>
<label for="Retailing"><input name="businesssector[]" type="checkbox" id="businesssector" value="Retailing">Fintech </label>
<label for="Electronics"><input name="businesssector[]" type="checkbox" id="businesssector" value="Electronics">Pharmaceutical </label>

</div>

</div>


						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Main Business Activities:<span class="text-danger"> *</span></label> 
						<input name="business_activities" type="text" id="manufactured" class="text" >
						</div>
						<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Details of the Products & Services:<span class="text-danger"> *</span></label> 
						<input name="detail_product" type="text" id="manufactured" class="text" >
						</div>
                    </div>
					
					<div class="row justify-content-between text-left">
					<div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Turnover - Last three Years (in Rs. Lakhs):<span class="text-danger"> *</span></label> 
					</div>
                        <div class="form-group col-sm-4 flex-column d-flex"> <label class="form-control-label px-3"></label> 
						<input name="turnover_2022" type="text" id="skilled" class="text" placeholder="Upto December 2022"  required >
                       
                       
						</div>
						<div class="form-group col-sm-4 flex-column d-flex"> <label class="form-control-label px-3"></label> 
						 <input name="turnover_2021" type="text" id="unskilled" class="text" placeholder="2021-22" required >
						</div>
						<div class="form-group col-sm-4 flex-column d-flex"> <label class="form-control-label px-3"></label> 
						 <input name="turnover_2020" type="text" id="unskilled" class="text" placeholder="2020-21"  required >
						</div>
                    </div>
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Number of Employees:<span class="text-danger"> *</span></label> 
						<input name="no_employee" type="text" id="management" class="text" >
						</div>
						<div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Allied business activities, if any: <span class="text-danger"> *</span></label> 
						<input name="Allied_business" type="text" id="Allied_business" class="text" >
						</div>
                    </div>
					<p style="font-size: 20px; text-decoration: underline;">Factory or manufacturing units situated at:  </p>
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
						<label class="form-control-label px-3">Address  <span class="text-danger"> *</span></label> 
						<input name="address1" type="text" id="address1" class="text" required value="<?php echo isset($_GET['address1']) ? $_GET['address1'] : "" ?>">
						</div>
						 <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">city  <span class="text-danger"> *</span></label> 
						<input name="City1" type="text" id="City1" class="text" required value="<?php echo isset($_GET['City1']) ? $_GET['City1'] : "" ?>">
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">District  <span class="text-danger"> *</span></label> 
						<input name="District1" type="text" id="District1" class="text" required value="<?php echo isset($_GET['District1']) ? $_GET['District1'] : "" ?>">
						</div>
						 <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">State  <span class="text-danger"> *</span></label> 
						<input name="State1" type="text" id="State1" class="text" required value="<?php echo isset($_GET['State1']) ? $_GET['State1'] : "" ?>">
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pincode  <span class="text-danger"> *</span></label> 
						<input name="Pincode1" type="text" id="Pincode1" class="text" required value="<?php echo isset($_GET['Pincode1']) ? $_GET['Pincode1'] : "" ?>">
						</div>
						 <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Brief profile of the applicant Or Chairman or CEO or Director:  <span class="text-danger"> *</span></label> 
						<input name="Brief_profile" type="text" id="Brief_profile" class="text" >
						</div>
						
                    </div>
					
					
					<p style="font-size: 20px; text-decoration: underline;">Kindly provide your specific interest and information/ requirements about seeking assistance or guidance on the following:</p>
                    
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">A. Marketing, branding, Distributions, Franchises, Channel Partnership and other strategic business alliance in the domestic and international markets. Please provide specific requirements and product and services details:  <span class="text-danger"> *</span></label> 
						<input name="domestic_market" type="text" id="manufactured" class="text" >
						</div>
						
                    </div>
					
                   <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">B. Interested to connect with potential Buyers, importers, SMEs, Corporates & 
						MNCs for supply & procurement (Provide sectors & specific industries):  <span class="text-danger"> *</span></label> 
						<input name="inter_market" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">C. Interested to connect with Suppliers, Manufacturers, SMEs, Corporates to 
						buy products or raw material or semi-finished goods or material or capital goods or any other services. *  <span class="text-danger"> *</span></label> 
						<input name="require_product" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">D. Looking for Support to Channelise Bank Finance, Investment, Private Equity or 
						Venture Capital or External Commercial Borrowings for business growth or expansion or for setting up additional or new manufacturing units. (Please provide specific requirements, project details, financial documents and other supporting information) *  <span class="text-danger"> *</span></label> 
						<input name="interest_bank" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">E. Interested to connect with foreign or Indian business partners for Joint 
						Ventures, Technology Transfer, Contract Manufacturing or Strategic Partnership for marketing & distribution and business advisory services in India or any other country.  <span class="text-danger"> *</span></label> 
						<input name="interest_connect" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">F. Interested to avail or seeking business advisory services related to business 
						growth, export promotion, import facilitation, mergers and acquisitions, government services, restructuring or revival of the company or business, marketing, branding, project management or sales promotion.  <span class="text-danger"> *</span></label> 
						<input name="interest_import" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">G. Looking for ready-made industrial premises or existing working company to buy or on lease, industrial land, industrial park on private or government zone.  <span class="text-danger"> *</span></label> 
						<input name="interest_acquire" type="text" id="detservices" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">H. Interested to join Expert Committees of the chamber. Please provide your specific interest as per your expertise and experience.  <span class="text-danger"> *</span></label> 
						<input name="business_advisory" type="text" id="issuesproblems" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">I. Membership Details of other Organizations, if any:  <span class="text-danger"> *</span></label> 
						<input name="overseas_partners" type="text" id="issuesproblems" class="text" >
						</div>
						
                    </div>
					
					<div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">J. Details of Awards & Recognitions received from registered and leading organization for the last 3 years.  <span class="text-danger"> *</span></label> 
						<input name="Marketing" type="text" id="issuesproblems" class="text" >
						</div>
						
                    </div>
					
				
					
					
					<div class="row justify-content-between text-left" style="justify-content: initial !important;">
                        <label class="form-control-label px-3">Declaration <span class="text-danger"> *</span></label> 
						<input name="declaration" type="checkbox" id="eventchamber" value="SME Coaching" required value style="margin-right: 15px; margin-top: 0px;">
						<label for="Above information is true and correct and can be used for business opportunities">
						Above information is true and correct and can be used for business opportunities</label>
						
						
				    </div>
						<div class="row justify-content-between text-left">
                       <div class="g-recaptcha form-group" data-sitekey="6LebFWskAAAAAFvkrFhUuaqPMmE0qbJM6FEVfjyL"></div>
						
                    </div>
						
                    </div>
					<div class="row">
					 <div class="form-group col-sm-4">  </div>
                        <div class="form-group col-sm-4"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

   
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
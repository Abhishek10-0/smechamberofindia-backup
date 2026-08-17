<?php session_start();
require 'config.php';

if (isset($_POST['form_hash'])) {
	
	/*(if(isset($_POST['g-recaptcha-response']))
	$captcha_indian=$_POST['g-recaptcha-response'];
	if(!$captcha_indian){
		$errMSGs = 'Please Check the Captcha form';
    }
	
	$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdkNlIUAAAAANQahCW_Uq8GtcCzb0fBzaZtHl7O&response=".$captcha_indian."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          $errMSGs = 'Are you a spammer? If not kindly select captcha.';
        }
        else
        {
	*/
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
  
/*$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['designation']=$_POST['designation'];
$_SESSION['email']=$_POST['email'];
$_SESSION['mobilenumber']=$_POST['mobilenumber'];
$_SESSION['phonenumber']=$_POST['phonenumber'];
$_SESSION['address']=$_POST['address'];
$_SESSION['companyregistered']=$_POST['companyregistered'];
$_SESSION['udyognumber']=$_POST['udyognumber'];

$_SESSION['businesssector']=implode(',',$_POST['businesssector']);

$_SESSION['manufactured']=$_POST['manufactured'];
$_SESSION['detservices']=$_POST['detservices'];
$_SESSION['management']=$_POST['management'];

$_SESSION['impproducts']=$_POST['impproducts'];


$_SESSION['interestedfor']=implode(',',$_POST['interestedfor']);

$_SESSION['meetforeign']=$_POST['meetforeign'];
$_SESSION['supportench']=implode(',',$_POST['supportench']);

$_SESSION['eventchamber']=implode(',',$_POST['eventchamber']);
$_SESSION['issuesproblems']=$_POST['issuesproblems'];
$_SESSION['declaration']=$_POST['declaration'];
$_SESSION['otp']=$rndno;
header( "Location: form-verification-directory.php" );
*/
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


        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-112053032-1');
        </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-3MN4BF7FFJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3MN4BF7FFJ');
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
<section class="membership-form">
<div class="container" >
<div class="row-fluid">
    <form method="post" action="" id="mform" class="member-form" enctype = "multipart/form-data">
<div class="panel-main-standard panel-form">
<h1>Add Your Name In SME Directory</h1>
<p>Fields marked with a <span class="emp">*</span> are required.</p>
<div class="form">
<div class="field">
<div class="control-label"><strong>Your Details</strong></div>
</div>
<div class="field">
<label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
<div class="controls">
<input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="For Name">Person Name <span class="emp">*</span></label>
<div class="controls">
<select name="title" id="title" class="select" style="width:86px;" required >
<option value="">Title</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Ms">Ms</option>
<option value="Dr">Dr</option>
<option value="Prof">Prof</option>
</select>
<script>
document.getElementById('title').value = "<?php echo $_GET['title']; ?>";
</script>
<input name="fname" type="text" id="fname" class="text" placeholder="first name" style="width:209px;" required value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>">
<input name="lname" type="text" id="lname" class="text" placeholder="last name" style="width:209px;" required value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
<div class="controls">
<input name="designation" type="text" id="designation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Contact Detail">Contact Details: <span class="emp"></span></label>
<div class="controls">
<input type="text" name="phonenumber" id="phonenumber" placeholder="Tel" style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" <?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
<input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No*." style="width:253px;" maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Email">Email <span class="emp">*</span></label>
<div class="controls">
<input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="For Name">Name of the marketing and purchase officer <span class="emp">*</span></label>
<div class="controls">
<select name="alt_title" id="title" class="select" style="width:86px;" required >
<option value="">Title</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Ms">Ms</option>
<option value="Dr">Dr</option>
<option value="Prof">Prof</option>
</select>
<script>
document.getElementById('alt_title').value = "<?php echo $_GET['alt_title']; ?>";
</script>
<input name="alt_fname" type="text" id="alt_fname" class="text" placeholder="first name" style="width:209px;" required value="<?php echo isset($_GET['alt_fname']) ? $_GET['alt_fname'] : "" ?>">
<input name="alt_lname" type="text" id="alt_lname" class="text" placeholder="last name" style="width:209px;" required value="<?php echo isset($_GET['alt_lname']) ? $_GET['alt_lname'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Contact Detail">Contact Details: <span class="emp"></span></label>
<div class="controls">
<input type="text" name="alt_phonenumber" id="phonenumber" placeholder="Tel" style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" <?php echo isset($_GET['alt_phonenumber']) ? $_GET['alt_phonenumber'] : "" ?>">
<input type="text" name="alt_mobilenumber" id="mobilenumber" placeholder="Mobile No*." style="width:253px;" maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['alt_mobilenumber']) ? $_GET['alt_mobilenumber'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Email">Email <span class="emp">*</span></label>
<div class="controls">
<input name="alt_email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['alt_email']) ? $_GET['alt_email'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Addresss">Registered Office Address <span class="emp">*</span></label>
<div class="controls">
<input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Addresss">City <span class="emp">*</span></label>
<div class="controls">
<input name="city" type="text" id="city" class="text" required value="<?php echo isset($_GET['city']) ? $_GET['city'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Addresss">State <span class="emp">*</span></label>
<div class="controls">
<input name="state" type="text" id="state" class="text" required value="<?php echo isset($_GET['state']) ? $_GET['state'] : "" ?>">
</div>
</div>

<div class="field">
<label class="control-label" for="Addresss">Pincode <span class="emp">*</span></label>
<div class="controls">
<input name="pincode" type="text" id="pincode" class="text" required value="<?php echo isset($_GET['pincode']) ? $_GET['pincode'] : "" ?>">
</div>
</div>

<div class="field">
<label class="control-label" for="Addresss">Website </label>
<div class="controls">
<input name="website" type="text" id="website" class="text" value="<?php echo isset($_GET['website']) ? $_GET['website'] : "" ?>">
</div>
</div>
    <div class="field">
<label class="control-label" for="Interested for Import Products">Company Registered as <span class="emp">*</span></label>
<div class="controls">
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
<script type="text/javascript">
document.getElementById('companyregistered').value = "<?php echo $_GET['companyregistered']; ?>";
</script>
</div>
</div>

<div class="field">
<label class="control-label" for="Udyog Aadhar Registration Number">MSME / Udyam Registration Number <span class="emp"></span></label>
<div class="controls">
<input name="udyognumber" type="text" id="udyognumber" class="text" <?php echo isset($_GET['udyognumber']) ? $_GET['udyognumber'] : "" ?>>
</div>
</div>

<div class="field">
<label class="control-label" for="GST Number">GST Number:<span class="emp"></span></label>
<div class="controls">
<input name="gst" type="text" id="gst" class="text" <?php echo isset($_GET['gst']) ? $_GET['gst'] : "" ?>>
</div>
</div>

<div class="field">
<label class="control-label" for="Industrial of Business Sector">Industrial or Business Sector  <span class="emp"></span></label>
<div class="controls" style="display: inline-flex;">
<input name="businesssector[]" type="checkbox" id="businesssector" value="Manufacturing"><label for="Manufacturing">Manufacturing  </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Engineering"><label for="Engineering">Engineering  </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Electronics"><label for="Electronics">Electronics </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Electricals"><label for="Electricals">Electricals</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Automotive"><label for="Automotive">Automotive </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Chemical"><label for="Chemical">Chemical </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Plastic"><label for="Plastic">Plastic  </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="IT"><label for="IT">IT</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Oil & Gas"><label for="Oil & Gas">Oil & Gas </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="ICT"><label for="ICT">ICT </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Pharmaceutical"><label for="Pharmaceutical">Pharmaceutical </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Textiles"><label for="Textiles">Textiles</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Infrastructure"><label for="Infrastructure">Infrastructure</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Food Processing"><label for="Food Processing">Food Processing</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Packaging"><label for="Packaging">Packaging </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Printing"><label for="Printing">Printing</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Paper"><label for="Paper">Paper </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Glass"><label for="Glass">Glass </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Healthcare"><label for="Healthcare">Healthcare</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Distribution"><label for="Distribution">Distribution</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="E-commerce"><label for="E-commerce">E-commerce</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Service Sector"><label for="Service Sector">Service Sector</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Franchise"><label for="Franchise">Franchise</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Logistics"><label for="Logistics">Logistics</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Marketing"><label for="Marketing">Marketing</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Education"><label for="Education">Education</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="FMCG"><label for="FMCG">FMCG</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Financial Service"><label for="Financial Service">Financial Service</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Insurance"><label for="Insurance">Insurance </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Hospitality"><label for="Hospitality">Hospitality </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Export"><label for="Export">Export </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Import"><label for="Import">Import </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Media"><label for="Media">Media </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Entertainment"><label for="Entertainment">Entertainment </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Retail"><label for="Retail">Retail </label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Advertisement"><label for="Advertisement">Advertisement</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Industrial Services"><label for="Industrial Services">Industrial Services</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Utilities services"><label for="Utilities services">Utilities services </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Professional Services"><label for="Professional Services">Professional Services</label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Government Services"><label for="Government Services">Government Services </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Realty & Construction"><label for="Realty & Construction ">Realty & Construction  </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Consumer Goods & Services"><label for="Consumer Goods & Services">Consumer Goods & Services</label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Human Resource & Employment Services"><label for="Human Resource & Employment Services">Human Resource & Employment Services </label>
<input name="businesssector[]" type="checkbox" id="businesssector" value="Agro Based Industries"><label for="Agro Based Industries ">Agro Based Industries </label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Sub sector of above segment "><label for="Sub sector of above segment ">Sub sector of above segment </label>

<input name="businesssector[]" type="checkbox" id="businesssector" value="Other Sector (Please Specify)"><label for="Other Sector (Please Specify)">Other Sector (Please Specify)</label>
</div>
</div>
<div class="field">
<label class="control-label" for="*Main Business activity">Main Business activity: <span class="emp">*</span></label>
<div class="controls">
<input name="business_activity" type="text" id="business_activity" class="text" required value="<?php echo isset($_GET['business_activity']) ? $_GET['business_activity'] : "" ?>">
</div>
</div>
<!--<div class="field">
<label class="control-label" for="Details of Products Manufactured">Details of Products & Services offered  <span class="emp"></span></label>
<div class="controls">
<input name="manufactured" type="text" id="manufactured" class="text" <?php echo isset($_GET['manufactured']) ? $_GET['manufactured'] : "" ?>>
</div>
</div>-->
<div class="field">
<label class="control-label" for="Details of Services">Details of Products & Services offered  : <span class="emp"></span></label>
<div class="controls">
<input name="detservices" type="text" id="detservices" class="text" <?php echo isset($_GET['detservices']) ? $_GET['detservices'] : "" ?>>
</div>
</div>
<label class="control-label" for="Turnover">Turnover of Company for last 3 years (in Rs. Cr) : <span class="emp"></span></label>
<div class="field">

<label class="control-label" for="December 2023">December 2023 : <span class="emp"></span></label>
<div class="controls">
<input name="turnover_2023" type="text" id="turnover_2023" class="text" <?php echo isset($_GET['turnover_2023']) ? $_GET['turnover_2023'] : "" ?>>
</div>
</div>

<div class="field">

<label class="control-label" for="December 2023"> 2022 - 2023 : <span class="emp"></span></label>
<div class="controls">
<input name="turnover_22_23" type="text" id="turnover_22_23" class="text" <?php echo isset($_GET['turnover_22_23']) ? $_GET['turnover_22_23'] : "" ?>>
</div>
</div>

<div class="field">

<label class="control-label" for="December 2023"> 2021 - 2021 : <span class="emp"></span></label>
<div class="controls">
<input name="turnover_21_22" type="text" id="turnover_21_22" class="text" <?php echo isset($_GET['turnover_21_22']) ? $_GET['turnover_21_22'] : "" ?>>
</div>
</div>


<div class="field">
<label class="control-label" for="Number of Employees">Number of Employees <span class="emp"></span></label>
<div class="controls">
<input name="no_employee" type="text" id="management" class="text"  style="width:163px;"<?php echo isset($_GET['no_employee']) ? $_GET['no_employee'] : "" ?>">
<!--<input name="skilled" type="text" id="skilled" class="text" placeholder="Skilled" style="width:163px;" required value="<?php echo isset($_GET['skilled']) ? $_GET['skilled'] : "" ?>">
<input name="unskilled" type="text" id="unskilled" class="text" placeholder="Unskilled" style="width:163px;" required value="<?php echo isset($_GET['unskilled']) ? $_GET['unskilled'] : "" ?>">-->
</div>
</div>

<div class="field">
<label class="control-label" for="domestic_markets"> Looking for support for Marketing, Branding and Promotion in the domestic markets <span class="emp"></span></label>
<div class="controls">
<input name="domestic_markets" type="text" id="domestic_markets" class="text" <?php echo isset($_GET['domestic_markets']) ? $_GET['domestic_markets'] : "" ?>>
</div>
</div>

<div class="field">
<label class="control-label" for="We are Interested for">Looking for support <span class="emp">*</span></label>
<div class="controls" style="display: inline-flex;">
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Distributorship"><label for="Distributorship">Distributorship</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Franchises"><label for="Franchises">Franchises</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Channel Partners"><label for="Channel Partners">Channel Partners</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Selling Agencies"><label for="Selling Agencies">Selling Agencies</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Business Partners"><label for="Business Partners">Business Partners</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Chemical"><label for="Chemical">Chemical</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Buyers"><label for="Buyers">Buyers</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Suppliers"><label for="Suppliers">Suppliers</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Buying Agents"><label for="Buying Agents">Buying Agents</label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Consultants"><label for="Consultants">Consultants </label>
<input name="Looking_for_support[]" type="checkbox" id="Looking for support" value="Service providers "><label for="Service providers ">Service providers </label>
</div>
</div>

<div class="field">
<label class="control-label" for="December 2023">Looking for support for Export Promotion or Import Facilitation details of products <span class="emp"></span></label>
<div class="controls">
<input name="Export" type="text" id="Export" class="text" <?php echo isset($_GET['Export']) ? $_GET['Export'] : "" ?>>
</div>
</div>

<div class="field">
<label class="control-label" for="We are Interested for">Financial Requirements (business growth | New projects | Expansion | To buy Capital goods or equipment | To buy industrial premises | Advanced technology):  <span class="emp"></span></label>
<div class="controls" style="display: inline-flex;">

<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Bank Finance"><label for="Bank Finance">Bank Finance</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Investment"><label for="Investment">Investment</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Private Equity"><label for="Private Equity">Private Equity</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Venture Capital"><label for="Venture Capital">Venture Capital</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Trade finance"><label for="Trade finance">Trade finance</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Collateral free loans"><label for="Collateral free loans">Collateral free loans</label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Unsecured loans "><label for="Unsecured loans ">Unsecured loans </label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Vendor finance "><label for="Vendor finance ">Vendor finance </label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="Project finance "><label for="Project finance ">Project finance </label>
<input name="financial_requirements[]" type="checkbox" id="Financial Requirements" value="External Commercial borrowings "><label for="External Commercial borrowings ">External Commercial borrowings </label>
</div>
</div>

<div class="field">
<label class="control-label" for="Looking for Support">Looking for support to identify enterprises or potential partners from India and abroad for :<span class="emp"></span></label>
<div class="controls" style="display: inline-flex;">
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Joint Venture"><label for="Joint Venture">Joint Venture</label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Investment partner"><label for="Investment partner">Investment partner</label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Technology Transfer"><label for="Technology Transfer">Technology Transfer</label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Strategi partner for marketing & promotion"><label for="Strategi partner for marketing & promotion">Strategi partner for marketing & promotion</label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Mergers"><label for="Mergers">Mergers</label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Ready-made Manufacturing unit for acquisition "><label for="Ready-made Manufacturing unit for acquisition ">Ready-made Manufacturing unit for acquisition </label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Ready-made Manufacturing unit for acquisition "><label for="Ready-made Manufacturing unit for acquisition ">Ready-made Manufacturing unit for acquisition </label>
<input name="potential_partners[]" type="checkbox" id="potential_partners" value="Loan & License manufacturing"><label for="Loan & License manufacturing">Loan & License manufacturing</label>
</div>
</div>

<div class="field">
<label class="control-label" for="Interested for Export Business">Interested to enrol membership<span class="emp">*</span></label>
<div class="controls">
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




<div class="field">
<label class="control-label" for="Issues and Problems">Details of awards & recognitions for exemplary achievements for the last three years:<span class="emp"></span></label>
<div class="controls">
<input name="achievements" type="text" id="achievements" class="text" <?php echo isset($_GET['achievements']) ? $_GET['achievements'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Declaration">Declaration<span class="emp">*</span></label>
<div class="controls">
<input name="declaration"type="checkbox" id="eventchamber" value="SME Coaching" required value="><label for="Above information is true and correct and can be used for business opportunities">Above information is true and correct and can be used for business opportunities</label>
</div>
</div>

<div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>    
</div>
<input type="submit" value="Submit" name="form_hash" class="btn-continue" />
</div>
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
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
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
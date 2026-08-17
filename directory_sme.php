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
		.member-form {
    max-width: 1200px;
    margin: 0;
     margin-left: 0%; 
}
.form .field {
    border-bottom: 1px solid #e1dfe0;
    overflow: auto;
    background-color: white;
}
.panel-form {
    background: none;
}
.form .field {
    border-bottom: none;
}
.form .field .text, .form .field .select {
    border-color: #6b6b6b #a1a1a1 #a1a1a1 #a1a1a1;
}
input {
    width: 100%;
}
.span1.form-group {
    margin-left: 5px;
}
		</style>


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
                <div class="form row-fluid">
                  <div class="field">
                    <div class="control-label"><strong>Your Details</strong></div>
                  </div>

                  <div class="span6 form-group">
                    <label class="control-label" for="Company Name">First Name <span class="emp">*</span></label>
                    <input name="fname" type="text" id="name" class="text" required value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>">
                  </div>

                  <div class="span5 form-group">
                    <label class="control-label" for="Company Name">Last Name <span class="emp">*</span></label>
                    <input name="lname" type="text" id="name" class="text" required value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>">
                  </div>

                  <div class="span5 form-group">
                    <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                    <input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
                  </div>

                  <div class="span5 form-group">
                    <label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
                    <div class="controls">
                    <input name="designation" type="text" id="designation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
                  </div>
                </div>
                <div class="span5 form-group">
                  <label class="control-label" for="Contact Detail">Contact Details: <span class="emp"></span></label>
                  <div class="controls">
                    <input type="text" name="phonenumber" id="phonenumber" placeholder="Tel" style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" <?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No*." style="width:253px;" maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                  </div>
                </div>
                <div class="span5 form-group">
                  <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                  <div class="controls">
                    <input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                  </div>
                </div>
                <div class="span5 form-group">
                  <label class="control-label" for="Addresss">Registered Office Address <span class="emp">*</span></label>
                  <div class="controls">
                    <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                  </div>
                </div>
                <div class="span5 form-group">
                  <label class="control-label" for="Interested for Import Products">Company Registered as <span class="emp">*</span></label>
                  <div class="controls">
                    <select name="companyregistered" id="companyregistered" class="select" required >
                    <option value="">Select</option>
                    <option value="Private Limited">Private Limited</option>
                    <option value="Partnership Firm">Partnership Firm</option>
                    <option value="LLP">LLP</option>
                    <option value="Proprietorship">Proprietorship</option>
                    <option value="Public Limited">Public Limited</option>
                    <option value="Others">Others</option>
                    </select>
                    <script type="text/javascript">
                    document.getElementById('companyregistered').value = "<?php echo $_GET['companyregistered']; ?>";
                    </script>
                  </div>
                </div>

                <div class="span5 form-group">
                  <label class="control-label" for="Udyog Aadhar Registration Number">MSME / Udyam Registration Number <span class="emp"></span></label>
                  <div class="controls">
                    <input name="udyognumber" type="text" id="udyognumber" class="text" <?php echo isset($_GET['udyognumber']) ? $_GET['udyognumber'] : "" ?>>
                  </div>
                </div>
                <div class="span11 form-group">
                  <label class="control-label" for="Industrial of Business Sector">Industrial or Business Sector  <span class="emp"></span></label>
                  <div class=" controls" style="display: -webkit-inline-box;">
                    <div class="row-fluid">
                      <div class="span1 form-group">
                        <label for="Manufacturing"> <input name="businesssector[]" type="checkbox" id="businesssector" value="Manufacturing">Manufacturing  </label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Engineering"><input name="businesssector[]" type="checkbox" id="businesssector" value="Engineering">Engineering  </label>
                      </div>

                      <div class="span1 form-group">
                        <label for="Energy"><input name="businesssector[]" type="checkbox" id="businesssector" value="Energy">Energy </label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Infrastructure"><input name="businesssector[]" type="checkbox" id="businesssector" value="Infrastructure">Infrastructure</label>
                      </div>
                      <div class="span1 form-group">
                        <label for="FMCG"><input name="businesssector[]" type="checkbox" id="businesssector" value="FMCG">FMCG</label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Exports"><input name="businesssector[]" type="checkbox" id="businesssector" value="Exports">Exports </label>
                      </div>
                      <div class="span1 form-group">
                        <label for="IT"><input name="businesssector[]" type="checkbox" id="businesssector" value="IT">IT</label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Hospitality"><input name="businesssector[]" type="checkbox" id="businesssector" value="Hospitality">Hospitality </label>
                      </div>
                    </div>
                    <div class="row-fluid">
                      <div class="span1 form-group">
                        <label for="Retailing"><input name="businesssector[]" type="checkbox" id="businesssector" value="Retailing">Retailing</label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Electronics"><input name="businesssector[]" type="checkbox" id="businesssector" value="Electronics">Electronics </label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Electricals"><input name="businesssector[]" type="checkbox" id="businesssector" value="Electricals">Electricals </label>
                      </div>
                      <div class="span1 form-group">
                        <label for="Finance"><input name="businesssector[]" type="checkbox" id="businesssector" value="Finance">Finance </label>
                      </div>

                      <div class="span1 form-group">
                        <label for="Auto & Auto Ancillary"><input name="businesssector[]" type="checkbox" id="businesssector" value="Auto & Auto Ancillary">Auto & Auto Ancillary </label>
                      </div>
                    </div>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Realty & Construction"><label for="Realty & Construction ">Realty & Construction  </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Agro Based Industries"><label for="Agro Based Industries ">Agro Based Industries </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="ICT"><label for="ICT">ICT </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Service Sector"><label for="Service Sector">Service Sector</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Consumer Durables"><label for="Consumer Durables">Consumer Durables</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Textiles"><label for="Textiles">Textiles</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Healthcare"><label for="Healthcare">Healthcare</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Chemicals"><label for="Chemicals">Chemicals </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Metal & Mining"><label for="Metal & Mining">Metal & Mining</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Oil & Gas"><label for="Oil & Gas">Oil & Gas </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Packaging"><label for="Packaging">Packaging </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Paper"><label for="Paper">Paper </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Plastic"><label for="Plastic">Plastic  </label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Printing"><label for="Printing">Printing</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Advertisement"><label for="Advertisement">Advertisement</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Media"><label for="Media">Media</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Allied Industrial Secto"><label for="Allied Industrial Sector">Allied Industrial Sector</label>
                    <input name="businesssector[]" type="checkbox" id="businesssector" value="Others"><label for="Others">Others</label>
                    </div>
                  </div>

                  <div class="span5 form-group">
                    <label class="control-label" for="Details of Products Manufactured">Details of Products Manufactured: <span class="emp"></span></label>
                    <div class="controls">
                      <input name="manufactured" type="text" id="manufactured" class="text" <?php echo isset($_GET['manufactured']) ? $_GET['manufactured'] : "" ?>>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Details of Services">Details of services: <span class="emp"></span></label>
                    <div class="controls">
                      <input name="detservices" type="text" id="detservices" class="text" <?php echo isset($_GET['detservices']) ? $_GET['detservices'] : "" ?>>
                    </div>
                  </div>
                  <div class="span5 form-group">
                  <label class="control-label" for="Number of Employees">Number of Employees <span class="emp"></span></label>
                    <div class="controls">
                      <input name="management" type="text" id="management" class="text"  style="width:163px;"<?php echo isset($_GET['management']) ? $_GET['management'] : "" ?>">
                   
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Interested for Export Business">Interested for Export Business <span class="emp">*</span></label>
                    <div class="controls">
                      <select name="expobusiness" id="expobusiness" class="select" required >
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                      <script type="text/javascript">
                      document.getElementById('expobusiness').value = "<?php echo $_GET['expobusiness']; ?>";
                      </script>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Interested for Import Products">Interested to Import Products <span class="emp">*</span></label>
                    <div class="controls">
                      <select name="impproducts" id="impproducts" class="select" required >
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </select>
                      <script type="text/javascript">
                      document.getElementById('impproducts').value = "<?php echo $_GET['impproducts']; ?>";
                      </script>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="We are Interested for">We are interested for <span class="emp"></span></label>
                    <div class="controls" style="display: inline-flex;">
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Joint Ventures"><label for="Joint Ventures">Joint Ventures</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Technology Transfers"><label for="Technology Transfers">Technology Transfers</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Contract Manufacturing tie-ups with Foreign or Indian Companies"><label for="Contract Manufacturing tie-ups">Contract Manufacturing tie-ups with Foreign or Indian Companies</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Bank Finance"><label for="Bank Finance">Bank Finance</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Investment Partner"><label for="Investment Partner">Investment Partner</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="ECB"><label for="ECB">ECB</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Venture Capital"><label for="Venture Capital">Venture Capital</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Private Equity"><label for="Private Equity">Private Equity</label>
                      <input name="interestedfor[]" type="checkbox" id="interestedfor" value="Collateral Free Loans"><label for="Collateral Free Loans">Collateral Free Loans </label>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Looking for Support">Are you looking for support for enhancement of business With <span class="emp"></span></label>
                    <div class="controls" style="display: inline-flex;">
                      <input name="supportench[]" type="checkbox" id="supportench" value="SMEs"><label for="SMEs">SMEs</label>
                      <input name="supportench[]" type="checkbox" id="supportench" value="Corporates"><label for="Corporates">Corporates</label>
                      <input name="supportench[]" type="checkbox" id="supportench" value="MNCs"><label for="MNCs">MNCs</label>
                      <input name="supportench[]" type="checkbox" id="supportench" value="Government PSUs"><label for="Government PSUs">Government PSUs</label>
                    </div>
                  </div>

                  <div class="span5 form-group">
                    <label class="control-label" for="Event Chamber">Interested to participate in various events of Chamber  <span class="emp"></span></label>
                    <div class="controls" style="display: inline-flex;">
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="Conference"><label for="Conference">Conference</label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="Seminars"><label for="Seminars">Seminars</label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="Traning Programs"><label for="Training Programs">Training Programs</label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="Delegation to Foregine Countries"><label for="Delegation to Foreign Countries">Delegation to Foreign Countries</label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="Roundtables Meetings"><label for="Roundtable Meetings">Roundtable Meetings</label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="SMEtalks Show"><label for="SMEtalks Show">SMEtalks Show </label>
                      <input name="eventchamber[]" type="checkbox" id="eventchamber" value="SME Coaching"><label for="SME Coaching">SME Coaching</label>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Issues and Problems">Issues and Greviances related to your Business<span class="emp"></span></label>
                    <div class="controls">
                      <input name="issuesproblems" type="text" id="issuesproblems" class="text" <?php echo isset($_GET['issuesproblems']) ? $_GET['issuesproblems'] : "" ?>>
                    </div>
                  </div>
                  <div class="span5 form-group">
                    <label class="control-label" for="Declaration">Declaration<span class="emp">*</span></label>
                    <div class="controls">
                    <input name="declaration"type="checkbox" id="eventchamber" value="SME Coaching" required><label for="Above information is true and correct and can be used for business opportunities">Above information is true and correct and can be used for business opportunities</label>
                    </div>
                  </div>
                  <?php
                  //  require_once('recaptchalib.php');
                  //$publickey = "6Lfd30YUAAAAAOf90yHYwPp33602d1_7MufX-yzD"; // you got this from the signup page
                  // echo recaptcha_get_html($publickey);
                  ?>
                  <?php
                  // if (isset($_REQUEST['captchaError'])){
                  ?>
                  <!-- <b style="color: red">Incorrect Captcha Entered!</b> -->
                  <?php
                  // };
                  ?>
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
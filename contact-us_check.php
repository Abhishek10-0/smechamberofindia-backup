<?php
include('config.php');
session_start();
if (isset($_POST['submit'])) {
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_SESSION["mobilenumber"];
$rndno=rand(100000, 999999);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "allroutetech.co.in/sendsms/bulksms_v2.php?apikey=c21lY2htOmJyYUdPUTgw&type=TEXT&sender=SMECHM&entityId=1201158099447823312&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20SMECHM",
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
$_SESSION['title']=$_POST['title'];
$_SESSION['f_name']=$_POST['fname'];
$_SESSION['l_name']=$_POST['lname'];
$_SESSION['designation']=$_POST['designation'];
$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['businessinterest']=$_POST['businessinterest'];
$_SESSION['email']=$_POST['email'];
$_SESSION['mobilenumber']=$_POST['mobilenumber'];
$_SESSION['message']=$_POST['message'];
$_SESSION['address']=$_POST['address'];
$_SESSION['otp']=$rndno;
header( "Location: contact_verify.php" );
}
} else {}
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="keywords" content="Contact detail of SME Chamber of Inida, Address of SME Chamber of India, location of SME Chamber of Inida">
    <meta name="description" content="Registered & Head Office:3, Ground Floor, Samruddhi Venture Park, Adjoining Hotel Tunga Paradise, SEEPZ - MIDC Central Road, Next to Akruti Centre, Andheri (E) Mumbai - 400 093.E-Mail : smechamberofindia@vsnl.net | smechamberofindia@gmail.com | smechamber@vsnl.net ,Tel : + 91 – 22 – 2832 7219 / 6667 4444 / 6150 9800 | Fax : + 91 – 22 – 2825 0414,Working Days : Monday to Saturday | Working Hours : 09.30 a.m to 6.30 p.m">
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
    <link rel="stylesheet" type="text/css" href="css/form.css" media="screen"/>
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.form.css" />
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
    <script src="js/html5.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
	.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
.col-sm-10 {
  width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
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
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
</style>
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
                <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Contact Us</li>
        </ul>
        <section class="contact-page">
          <div class="container">
            <div class="col-md-8 col-md-offset-2">
              <p style="text-align: center;"><strong> <u>Registered & Head Office:</u ></strong></p>
              <p style="text-align: center;">301, 3rd Floor, Samruddhi Venture Park, Krantiveer Lakhuji Salve Marg, adjoining Hotel Tunga Paradise, next to Akruti Centre, Andheri East, Mumbai, Maharashtra 400093<br>
					    E-Mail : <span style="color: #00e;">secretariat[at]smechamber[dot]com | director[at]smechamber[dot]com | smechamberofindia[at]gmail[dot]com | registration[at]smechamber[dot]in</span><br>
						    Fax : + 91 – 22 – 2825 0414 <br>
                Working Days : Monday to Saturday | Working Hours : 10.30 a.m. to 7.00 p.m</p><br>
            </div>
					</div>
				</section>
        <hr style="width: 50%; padding-left: 50%;">
          <p style="text-align: center;"><strong><u>Regional Offices of the Chamber</u></strong></p>
          <hr style="width: 50%; padding-left: 50%;">
          <section class="contact-page">
            <div class="container">
              <div class="col-md-4 col-md-offset-2">
                <p><u><b>Northern Regional Office</b></u><br>
                  Address:Goldrush Capital Services Private Limited<br> 
                  8H, Hansalaya building, Barakhamba Road, Connaught Place, New Delhi - 110001<br> 
                </p>
              </div>
              <div class="col-md-5">
                <p><u><b>Gujarat Regional Office</b></u><br>
                  Address: A / 709, Safal Pegasus, Opposite Venus Atlantis, 100 Feet Main Road, Prahladnagar, Ahmedabad,
                  Gujarat – 380015.<br> 
                </p>
              </div>
            </div>
            <hr>
            <div class="container">
              <div class="col-md-4 col-md-offset-2">
                <p><u><b>Pune Regional Office</b></u><br>
                  Email : <span style="color: #00e;">secretariat[at]smechamber[dot]com</span><br>
                </p>
              </div>
              <div class="col-md-5">
                <p><u><b>Madhya Pradesh Regional Office (Bhopal & Indore)</b></u><br>
    							Address: C/o Urbanitesllc LLP, Eh-27,Opp Apollo Hospital, Vijay Nagar, Indore-452010 , Madhya Pradesh<br> 
                </p>
              </div>
            </div>
            <hr>
            <div class="container">
              <div class="col-md-8 col-md-offset-2">
                <p style="text-align: center;"><strong> <u>East India Regional Office (Kolkata)</u ></strong></p>
                <p style="text-align: center;">
                  E-Mail : <span style="color: #00e;">secretariat[at]smechamber[dot]com</span><br>
     						</p>
              </div>
						</div>
   					<hr>
            <div class="container">
              <div class="col-md-6 col-md-offset-5">
                <strong style="text-align: center;"><u>Southern Regional Offices</u></strong>
              </div>
              <div class="col-md-4 col-md-offset-2">
                <p><u><b>Karnataka Regional Office</b></u><br>
                  Email : <span style="color: #00e;">secretariat[at]smechamber[dot]com</span><br>
    						</p>
              </div>
              <div class="col-md-5">
                <p><u><b>Tamil Nadu Regional Office</b></u><br>
								Address: C/o Sumeet Facilities Ltd, 34 / 46, MGR Raod, Kalashetra Colony, Besant Nagar, Chennai - 600 090.<br>
							</p>
            </div>
          </div>
          <hr>
          <div class="container">
            <div class="col-md-4 col-md-offset-2">
              <p><u><b>Kerala Regional Office</b></u><br>
                Email : <span style="color: #00e;">secretariat[at]smechamber[dot]com</span><br>
							</p>
            </div>
            <div class="col-md-5">
              <p><u><b>Andhra Pradesh and Telangana Regional Office</b></u><br>
                Email : <span style="color: #00e;">secretariat[at]smechamber[dot]com</span><br>
  						</p>
            </div>
          </div>
          <hr>
          <div class="container">
            <div class="col-md-6 col-md-offset-5">
              <strong style="text-align: center;"><u>Overseas Offices </u></strong>
            </div>
            <div class="col-md-4 col-md-offset-2">
              <p><u><b>Middle East & Regional Office</b></u><br>
                BUY DO BUY ADVERTISING LLC<br>
                P O. Box 55356, Dubai, U.A.E.<br>
              </p>
            </div>
            <div class="col-md-5">
              <p><u><b>Bahrain Regional Office</b></u><br>
                  Al Mahara Trading & Contracting<br>
                  7th Floor, Al Matrook Building, <br>
                  Diplomatic Area, Manama, Kingdom of Bahrain.<br>
                  P.O Box No : 11893<br>
              </p>
            </div>
          </div>
          <hr>
          <div class="container">
            <div class="col-md-4 col-md-offset-2">
              <p><u><b>Malaysia Regional Office</b></u><br>
                Tandoor Food industries Sdn Bhd<br>
                39, Jalan SS26/15,<br>
                Taman Mayang Jaya Light lnd. Park, <br>
                47301 Petaling Jaya, Selangor, Malaysia.<br>
              </p>
            </div>
            <div class="col-md-5">
              <p><u><b>Europe Regional Office</b></u><br>
                17 Casel, Brightwen Grove,<br>
                Stanmore, Middlesex, H A 7 4ZB<br>
                United Kingdom (UK)<br>
              </p>
            </div>
          </div>
          <hr>
        </div>
  			<section class="membership-form" >
          <div class="container" >
            <div class="row-fluid">
              <form action="" method="post" class="member-form" >
                <div class="panel-main-standard panel-form">
                  <h1>Contact Us For Any Enquiry</h1>
                  <p>Fields marked with a <span class="emp">*</span> are required.</p>
                  <div class="form">
                    <div class="field">
                      <div class="control-label"><strong>Your Details</strong></div>
                    </div>
                    <div class="field">
                      <label class="control-label" for="Your name">Name <span class="emp">*</span></label>
                      <div class="controls">
                        <select name="title" id="title" class="select" style="width:86px;" required>
                          <option value="">Title</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option>
                          <option value="Dr">Dr</option>
                          <option value="Prof">Prof</option>
                        </select>
                        <script type="text/javascript">
                          document.getElementById('title').value = "<?php echo $_GET['title'];?>";
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
                      <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                      <div class="controls">
                        <input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
                      </div>
                    </div>
                    <div class="field">
                      <label class="control-label" for="Business Interest">Business Interest <span class="emp">*</span></label>
                      <div class="controls">
                        <select name="businessinterest" id="businessinterest" class="select" required>
                          <option value="">Title</option>
                          <option value="Event Alert">Event Alert</option>
                          <option value="Membership">Membership</option>
                          <option value="SME Consultant">SME Consultant</option>
                          <option value="Channel Partner">Channel Partner</option>
                          <option value="Speaking Opportunity">Speaking Opportunity</option>
                          <option value="Sponsorship">Sponsorship</option>
                          <option value="Partnership">Partnership</option>
                          <option value="Others">Others</option>
                        </select>
                        <script type="text/javascript">
                          document.getElementById('businessinterest').value = "<?php echo $_GET['businessinterest'];?>";
                        </script>
                      </div>
                    </div>
                    <div class="field">
                      <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                      <div class="controls">
                        <input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                      </div>
                    </div>
                    <div class="field">
                      <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                      <div class="controls">
                        <input type="text" name="mobilenumber" class="text" id="mobilenumber" placeholder="Mobile No."  maxlength="10" pattern="\d{10}$" title="Please enter exactly 10 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                     </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                    <div class="controls">
                      <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Message">Message <span class="emp">*</span></label>
                    <div class="controls">
                      <textarea rows="4" cols="50" name="message" id="message" type="text" id="address" class="text" required>
                      <?php echo isset($_GET['message']) ? $_GET['message'] : "" ?>
                      </textarea>
                    </div>
                  </div>
                </div>
                <input type="submit" name="submit"  value="Submit"  class="btn-continue" />
              </div>
            </form>
          </div>      
        </div>
      </section>
      <?php include 'footer.php'; ?>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery.plugin.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.quicksand.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <script type="text/javascript" src="js/styleswitch.js"></script>
  <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
  <script src="js/custom.js" type="text/javascript"></script>
  <!--        <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>-->
  </body>
</html>


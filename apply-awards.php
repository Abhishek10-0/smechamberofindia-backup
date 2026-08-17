<?php
include('config.php');
session_start();

if (isset($_POST['sub'])) {
	
	if(isset($_POST['g-recaptcha-response']))
	{
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
			} 
			else 
			{
			  
				$_SESSION['company_name']=$_POST['companyname'];
				$_SESSION['f_name']=$_POST['fullname'];
				$_SESSION['comm']=$_POST['comm'];
				$_SESSION['turnover']=$_POST['turnover'];
				$_SESSION['nomination']=implode(',',$_POST['nomination']);
				$_SESSION['business']=$_POST['business'];
				
				$_SESSION['email']=$_POST['email'];
				$_SESSION['mobilenumber']=$_POST['mobilenumber'];
				$_SESSION['city']=$_POST['city'];				
				$_SESSION['otp']=$rndno;
				header( "Location: awards-verification.php" );
			}
		}
	} 
	else 
	{}
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apply for India SME Excellence Awards | SME Chamber Of India</title>
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
                                <h1 style="text-transform: capitalize;">Apply for India SME Excellence Awards</h1>
                            </div>
                        </div>
                    </div>
</div>
<ul class="breadcrumb" style="padding-left: 85px;">
 <li><a href="#">Awards</a></li>
 <li>Apply Now</li>
</ul>
<section class="membership-form">
<div class="container" >
<div class="row-fluid">
    <form method="POST" action="" id="mform" class="member-form" enctype = "multipart/form-data">
<div class="panel-main-standard panel-form">
<!--<h1>Add Your Name In SME Directory</h1>-->
<h3>I would like to Apply for India SME Excellence Award</h3>
<div class="form">
<div class="field">
<div class="control-label"><strong>Your Details</strong></div>
</div>
<div class="field">
<label class="control-label" for="Name of Applicant">Name of Applicant<span class="emp">*</span></label>
<div class="controls">
<input name="fullname" type="text" id="fullname" class="text" required value="<?php echo isset($_GET['fullname']) ? $_GET['fullname'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
<div class="controls">
<input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
</div>
</div>
    <div class="field">
<label class="control-label" for="Commencement Date of Company">Commencement Date of Company <span class="emp">*</span></label>
<div class="controls">
<input name="comm" type="text" id="comm" class="text" required value="<?php echo isset($_GET['comm']) ? $_GET['comm'] : "" ?>">
</div>
</div>
    <div class="field">
<label class="control-label" for="Total turnover of 2020-21">Total turnover of 2020-21<span class="emp">*</span></label>
<div class="controls">
<input name="turnover" type="text" id="turnover" class="text" required value="<?php echo isset($_GET['turnover']) ? $_GET['turnover'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Nomination Category">Select Category for Nomination  <span class="emp">*</span></label>
<div class="controls">
<input name="nomination[]" type="checkbox" id="nomination" value="Best Small Enterprise of the Year Award (Turnover upto Rs. 75 Crores)">Best Small Enterprise of the Year Award (Turnover upto Rs. 75 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Best Mid-Sized Enterprise of the Year Award (Turnover from Rs. 75 Crores to 250 Crores)">Best Mid-Sized Enterprise of the Year Award (Turnover from Rs. 75 Crores to 250 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Company of the Year Award (Turnover above Rs. 100 Crores)">Company of the Year Award (Turnover above Rs. 100 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="SME of the Year Award - Innovation & Inventions (Turnover above Rs. 50 Crores)">SME of the Year Award - Innovation & Inventions (Turnover above Rs. 50 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Entrepreneur of the Year Award - Small & Medium Enterprises (Turnover above Rs. 50 Crores) ">Entrepreneur of the Year Award - Small & Medium Enterprises (Turnover above Rs. 50 Crores) <br>

<input name="nomination[]" type="checkbox" id="nomination" value="Innovative SME of the Year Award (Turnover from Rs. 75 Crores to 250 Crores)">Innovative SME of the Year Award (Turnover from Rs. 75 Crores to 250 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Emerging SME of the Year Award (Turnover above Rs. 25 Crores)">Emerging SME of the Year Award (Turnover above Rs. 25 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="SME of the Year Award – Small Company (Turnover upto Rs. 75 Crores)">SME of the Year Award – Small Company (Turnover upto Rs. 75 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Global SME of the Year Award - Small & Medium Enterprises (Turnover above Rs. 100 Crores)">Global SME of the Year Award - Small & Medium Enterprises (Turnover above Rs. 100 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Best SME of the Year Award – Service Sector (Turnover upto Rs. 10 Crores)">Best SME of the Year Award – Service Sector (Turnover upto Rs. 10 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Best Institution of the Year Award - Supporting & Empowering SMEs for better growth & transformation (Corporates, Financial Institutions , Insurance, Education, HR, IT and other Institutions)">Best Institution of the Year Award - Supporting & Empowering SMEs for better growth & transformation (Corporates, Financial Institutions , Insurance, Education, HR, IT and other Institutions)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Family Owned Business of the Year Award (Turnover above Rs.75 Crores)">Family Owned Business of the Year Award (Turnover above Rs.75 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Women Entrepreneur of the Year Award (Turnover above Rs.10 Crores)">Women Entrepreneur of the Year Award (Turnover above Rs.10 Crores)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Start-Up Company of the Year Award (1 – 3 years of establishment of the Company)">Start-Up Company of the Year Award (1 – 3 years of establishment of the Company)<br>

<input name="nomination[]" type="checkbox" id="nomination" value="Young Entrepreneur of the Year Award (Age up to 35 years and Minimum 3 years of establishment of the Company)">Young Entrepreneur of the Year Award (Age up to 35 years and Minimum 3 years of establishment of the Company)<br>


</div>
</div>
<div class="field">
<label class="control-label" for="Industrial or business sector">Industrial or business sector<span class="emp">*</span></label>
<div class="controls">
<input name="business" type="text" id="business" class="text" required value="<?php echo isset($_GET['business']) ? $_GET['business'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Mobile Number">Mobile<span class="emp">*</span></label>
<div class="controls">
<input name="mobilenumber" type="text" id="mobilenumber" class="text" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
</div>
</div>
<div class="field">
<label class="control-label" for="Email">Email <span class="emp">*</span></label>
<div class="controls">
<input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
</div>
</div>
<div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
</div>
<input type="submit" value="Submit" name="sub" class="btn-continue" />
</div>
</form>
</div>      
</div>
</section>
                <!--   footer section will come here  -->
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
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>
    </body>
</html>
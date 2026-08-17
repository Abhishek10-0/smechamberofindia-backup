<?php
session_start();

if (isset($_POST['form_hash'])) {
	
	if(isset($_POST['g-recaptcha-response']))
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
			$_SESSION['fname']=$_POST['fname'];
			$_SESSION['lname']=$_POST['lname'];
			$_SESSION['designation']=$_POST['designation'];
			$_SESSION['companyname']=$_POST['companyname'];
			$_SESSION['businessactivity']=$_POST['businessactivity'];
			$_SESSION['businesssector']=$_POST['businesssector'];
			$_SESSION['interest']=$_POST['interest'];
			$_SESSION['service']=$_POST['service'];
			$_SESSION['sectorsme']=$_POST['sectorsme'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['mobilenumber']=$_POST['mobilenumber'];
			$_SESSION['phonenumber']=$_POST['phonenumber'];
			$_SESSION['address']=$_POST['address'];
			$_SESSION['otp']=$rndno;
			header( "Location: form-verify-strategic-partner.php" );
		}
	}
} 
else {}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Enquiry for Stall Booking | SME Chamber of India</title>
        <meta name="Description" content="SME Chamber of India is inviting proposals from interested companies and institutions, who are looking for promotion of their products and services to market and brand amongst Small and Medium Enterprises as well as Start-Ups from various sectors as their Channel or Business Partners. Potential partner Indian, Private & Foreign Banks, Indian & Foreign Institutions, PSUs and Government agencies, Asset restructuring companies, Investment Bankers, Private equity and venture capital funds, High network individuals, Education institutions, Capital goods manufacturers, Technology developers and providers
              Credit rating agencies,  Digital service providers, Telecom service providers,  Professionals and Law firms, Logistics & Ports, Media & Entertainment,  International Trade,  Exhibitions organisers and service providers,  Printing and packaging,  Industrial Parks and SEZs,  Airlines and Shipping companies">
        <meta name="Description" content="SME Chamber of India is inviting proposals from interested companies and institutions, who are looking for promotion of their products and services to market and brand amongst Small and Medium Enterprises as well as Start-Ups from various sectors as their Strategic or Business Partners. Potential partner Indian, Private & Foreign Banks, Indian & Foreign Institutions, PSUs and Government agencies, Asset restructuring companies, Investment Bankers, Private equity and venture capital funds, High network individuals, Education institutions, Capital goods manufacturers, Technology developers and providers
              Credit rating agencies,  Digital service providers, Telecom service providers,  Professionals and Law firms, Logistics & Ports, Media & Entertainment,  International Trade,  Exhibitions organisers and service providers,  Printing and packaging,  Industrial Parks and SEZs,  Airlines and Shipping companies">
		<meta name="Keywords" content="POTENTIAL PARTNERS -  Indian, Channel Partner in SMEs, Become a Channel Partner,  Private & Foreign Banks, Indian & Foreign Institutions">
        <meta name="Keywords" content="POTENTIAL PARTNERS -  Indian, Strategic Partner in SMEs, Become a Strategic Partner,  Private & Foreign Banks, Indian & Foreign Institutions">
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
        <script>
            function test() {
                if (document.getElementById("test").hidden)
                {
                    document.getElementById("test").hidden = false;
                } else
                {
                    document.getElementById("test").hidden = true;
                }
            };
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                                <h1 style="text-transform: capitalize;">
                                    <a href="strategic_partner.php" style="color: white;">Events</a>&nbsp;&nbsp; | &nbsp;&nbsp;
                                    <a href="partners.php" style="color: white;">Enquiry for Stall Booking </a></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>Enquiry for Stall Booking</li>
                </ul>
                <section class="welcome-text-box">
                    <div class="container">
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
                        <h2 style="font-size: 1.4em;">Enquiry for Stall Booking (Exhibitions supported by SME Chamber of India)</h2>
                        <div class="row-fluid">                            
                            <p style="text-align: justify; font-size: 20px; line-height: 40px;">
                                <b>Reserve your stall at Discounted Rate !</b><br/> 

                                <span style="padding-top:30px;">Please connect undersigned for further details :<br/>

 📞  Mobile No.: 022 - 69511120 <br/> ✉️ Email : director@smechamberofindia.in<br/>

Don’t miss this chance to make your brand stand out. Book your stall now and make your presence count!

</span>
                            </p>
                            
                        </div>
                      
                        
                       
                    </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>


<!--        <script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
<!--        <script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<script>function isNumber(evt) {
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

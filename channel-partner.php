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
			header( "Location: form-verification-channel-partner.php" );
		}
	}
} 
else {}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Channel Partners | SME Chamber of India</title>
        <meta name="Description" content="SME Chamber of India is inviting proposals from interested companies and institutions, who are looking for promotion of their products and services to market and brand amongst Small and Medium Enterprises as well as Start-Ups from various sectors as their Channel or Business Partners. Potential partner Indian, Private & Foreign Banks, Indian & Foreign Institutions, PSUs and Government agencies, Asset restructuring companies, Investment Bankers, Private equity and venture capital funds, High network individuals, Education institutions, Capital goods manufacturers, Technology developers and providers
              Credit rating agencies,  Digital service providers, Telecom service providers,  Professionals and Law firms, Logistics & Ports, Media & Entertainment,  International Trade,  Exhibitions organisers and service providers,  Printing and packaging,  Industrial Parks and SEZs,  Airlines and Shipping companies">
        <meta name="Keywords" content="POTENTIAL PARTNERS -  Indian, Channel Partner in SMEs, Become a Channel Partner,  Private & Foreign Banks, Indian & Foreign Institutions">
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
                                    <a href="channel-partner.php" style="color: white;">Channel Partners </a>&nbsp;&nbsp; | &nbsp;&nbsp;
                                    <a href="partners.php" style="color: white;">Partners </a></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>Channel Partners</li>
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
                        <h2 style="font-size: 1.4em;">Opportunity to be the channel partner to explore emerging business opportunities </h2>
                        <div class="row-fluid">                            
                            <p style="text-align: justify">
                                SME Chamber of India is inviting applications from interested companies to be the channel 
                                partner with the Chamber to develop & enhance business contacts & Growth, explore emerging business opportunities, identify new business partners & clients, establish strategic partnership to provide various services as well as supply to SMEs, Corporates, 
                                Multi-National Companies, Government Agencies, PSUs, foreign companies and other
                                potential industrial and business sectors.   
                            </p>
                            <p style="text-align: justify; margin-top: 15px;">
                                SME Chamber of India will provide platform & support to generate business leads, referrals, promote, market and brand products and services of the channel partner companies. SME Chamber of India is having large number of membership and  huge subscribers network as well as many potential companies are regularly approaching Chamber for new clients and suppliers to fulfil their business requirements.
                            </p>
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <h2 style="font-size: 1.4em;">Advantages to the Channel Partner: </h2><br>
                            <div class="span12">
                                <p style="margin: 1%;"> &#9673; &nbsp; Business leads, references for new business opportunities</p>
                                <p style="margin: 1%;"> &#9673; &nbsp;  Promotion & Marketing of products & services amongst potential clients </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Opportunity to brand and market at various events and activities of the Chamber </p>
                                <p style="margin: 1%;"> &#9673; &nbsp;   Marketing and promotion through mail campaigns </p>
                                <p style="margin: 1%;"> &#9673; &nbsp;   Advertisement in SME Connect Magazine</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Logo branding on the channel partner pages of SME Chamber of India website</p>
                                <p style="margin: 1%;"> &#9673; &nbsp;    Opportunity to brand & market at various appropriate events </p>
                                <!--                            </div>
                                                            <div class="span5">-->
                                <p style="margin: 1%;"> &#9673; &nbsp;   Branding through articles and information on SME Connect Magazine </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Free participation at 6 events</p>
                                <p style="margin: 1%;"> &#9673; &nbsp;  Logo presence at side backdrop at 6 various events</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Exclusive interactive sessions with CEOs of Corporates and SMEs</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Promote and brand unique business ideas, innovative products and concepts</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Brand your innovation & invention</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Research & market survey on products, services, value and trends</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Exploring business opportunities related to contract manufacturing or services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Participation in round table discussions and debates in various TV channel programs</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Identifying distributors, franchisers, dealers, agents, vendors and buying/selling agents</p>
                            </div>
                        </div><hr>
                        <div class="row-fluid">
                            <h2 style="font-size: 1.4em;">Who Can Become The Channel Partner? </h2><br>
                            <div class="span12">
                                <p style="margin: 1%;"> &#9673; &nbsp; Manufacturing companies </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Industrial Service providers</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; All kinds of Service Industries
                                </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Financial Institutions
                                </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; IT & IT Enabled services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Digital Media & digital support services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Automobiles and Industrial automation services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; HR Services (Recruitment, people management, Skill Development, Training)</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Waste Management, Water Treatment and Environment Protection</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Business Consulting Firms – Domestic & International Markets, Business Co-operation and Transformation</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Banking & Insurance</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Rental Services (Industrial Machineries, Equipment, Electronics, Electricals, Furniture, Automobiles, Industrial Premises, Commercial Premises)</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Investment Management & Promotion</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Financial Management & Accounting Services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Telecommunication</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Project Management Consultancy</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Logistics, Warehousing & transportation</p>

                                <!--</div>
                                <div class="span4">-->
                                <p style="margin: 1%;"> &#9673; &nbsp; Hospitality & FMCG</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Capital goods manufacturers and suppliers</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Media & Communication</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Healthcare and Medical accessories and equipment </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Outsourcing services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Furniture and Fixtures</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Technological support services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Franchising, distributorship and dealership</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Realty Sector (Industrial & Commercial)</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Education & Industrial training </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Legal and business transformation Services </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Cyber Security and surveillance </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Marketing & Branding services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Printing and Packaging</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Tours and Travel services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Other Professional and business Services</p>                                
                                <p style="margin: 1%;"> &#9673; &nbsp; Research & Development</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Government Liaison & Consultancy</p>
                            </div>
                        </div><hr>
                        <p style="text-align: justify; margin-bottom: 15px;">
                            If you are interested to expand your business reach, kindly send your company profile and business interest on
                            <a href="mailto:director@smechamber.com" style="margin-bottom: 10px;">director@smechamber.com</a>
                            at the earliest. We will review your products & services, business interest / reach / clients 
                            segment/ location / expectation so that we can prepare business plan and strategies and offer.
                        </p>
                        <p style="margin-bottom: 10px;">We look forward to receive your company profile and business interest at the earliest. </p>
                        <div>
                            <input type="submit" value="ADD YOUR NAME" onclick="test()" class="buttn-form " />
                            <div id="test" hidden="true">
                                <?php include 'channel-partner-form.php'; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>
		<!-- <script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
		<!--<script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
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

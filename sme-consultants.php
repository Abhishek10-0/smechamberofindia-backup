<?php 
session_start();
include("config.php");
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
        $_SESSION['businessactivity']=$_POST['businessactivity'];
        $_SESSION['businesssector']=$_POST['businesssector'];
        $_SESSION['service']=$_POST['service'];
        $_SESSION['businessinterest']=$_POST['businessinterest'];
        $_SESSION['sector']=$_POST['sector'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['mobilenumber']=$_POST['mobilenumber'];
        $_SESSION['phonenumber']=$_POST['phonenumber'];
        $_SESSION['address']=$_POST['address'];
        $_SESSION['otp']=$rndno;
        header( "Location: form-verification-consultant.php" );
    }
}
} else {}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>SME Consultant | SME Chamber of India</title>
    <meta name="Description" content="SME Chamber of India has initiated consortium for SME consultants to provide their advisory services and consultancy to SMEs from manufacturing, service industry, allied industries and start-up companies to impart knowledge, enhance capabilities & capacity, productivity and quality improvement and to strengthen them for business growth & expansion as well as to survive in the competitive era of Make-In-India. CONSULTING AREAS, Business Process and transformation, Business Planning, General and Life Insurance">
    <meta name="Keywords" content="SME & INDUSTRIAL CONSULTANTS GROUP, Business Planning,Business Process and transformation,General and Life Insurance,">
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
    <link rel="stylesheet" type="text/css" href="css/form.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.css" />
    <link rel="stylesheet" type="text/css" href="css/screen.form.css" />
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
    <script src="js/html5.js" type="text/javascript"></script>
    <script>
        function test() {
            if (document.getElementById("test").hidden) {
                document.getElementById("test").hidden = false;
            } else {
                document.getElementById("test").hidden = true;
            }
        };
    </script>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                                <h1 style="text-transform: capitalize;">SME Consultants</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Partners</a></li>
                    <li>SME Consultant</li>
                </ul>
                <section class="welcome-text-box">
                    <div class="container">
                        <div class="row-fluid">
                            <p style="text-align: justify">
                                SME Chamber of India has initiated consortium for SME consultants and business advisors to provide their advisory services and consultancy to SMEs from manufacturing, service industry, allied industries and start-ups companies for business growth, improvement of knowledge, transformation & transition of SMEs, business & finance management system, marketing & sales, business process ecosystem, enhance capabilities & capacities, focus on productivity and quality improvement, awareness about various facilities & incentives, formalities and procedures of international trade, compliances, advantages and impact of GST, capital market access, office automation, industry automation, HR management, industrial safety and strengthen them to survive in the competitive era of Make-In-India.
                            </p>
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <h2>Opportunity for SME Consultants </h2>
                            <br>
                            <div class="span5">
                                <p style="margin: 1%;"> &#9673; &nbsp; Consultancy to SMEs for business growth & expansion/diversification</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Listing in SME consultant directory of Chamber</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Business leads and referral from SME sectors</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Connectivity with the potential SMEs</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Mentoring and interactive sessions</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Monthly and annual contracts with SMEs</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Suggestions and information for business transformation</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Assistance for quality productivity and improvement of services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Support to SMEs for innovation & inventions</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Resolving issues and problems related to industrial sectors</p>
                            </div>
                            <div class="span6">
                                <p style="margin: 1%;"> &#9673; &nbsp; Full page advertisement in SME Connect Magazine </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Logo and link with SME Chamber website </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Sharing articles about business advisory services </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Support for market development and expansion</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Exploring business consultancy for SMEs from manufacturing & service sector</p>
                                <p style="margin:1%;"> &#9673; &nbsp; Full page advertisement in SME Connect Magazine </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Participation in round table discussions and debates at the various events</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Free participation in appropriate events</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Opportunity to be the member of expert committee and jury</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <h2>CONSULTING AREAS</h2>
                            <br>
                            <div class="span5">
                                <p style="margin: 1%;"> &#9673; &nbsp; Business Process and Transformation</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Preparation of effective business plans</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Business & Financial Risk Mitigations</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; General and Life Insurance</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; IT and ITes services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Statutory compliances</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Enterprise management</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Legal services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Project management consultancy </p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Human Resource management</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Training & educational services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Branding and Promotions</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Customs & excise</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; GST</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Exhibition Support Services</p>
                            </div>
                            <div class="span5">
                                <p style="margin: 1%;"> &#9673; &nbsp; Investment advisory Services</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Finance and Accounts</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Capital Market Access</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Securitization</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Market Research</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; International Trade</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; 3-D printing & design</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; EPC Consulting</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Structural and Design Consulting</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Environmental consultancy</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Security and safety</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Energy conservation</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Telecom management</p>
                                <p style="margin: 1%;"> &#9673; &nbsp; Printing & publishing</p>
                            </div>
                        </div>
                        <hr>

                        <div>
                            <input type="submit" value="ADD YOUR NAME" onclick="test()" class="buttn-form " />
                            <div id="test" hidden="true">
                                <?php include 'sme-consultant-form.php'; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
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
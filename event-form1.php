<?php session_start();

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
  
$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['designation']=$_POST['designation'];
$_SESSION['businessactivity']=$_POST['businessactivity'];
$_SESSION['businesssector']=$_POST['businesssector'];
$_SESSION['email']=$_POST['email'];
$_SESSION['mobilenumber']=$_POST['mobilenumber'];
$_SESSION['phonenumber']=$_POST['phonenumber'];
$_SESSION['address']=$_POST['address'];
$_SESSION['lookingsupport']=$_POST['lookingsupport'];
$_SESSION['businessinterest']=$_POST['businessinterest'];
$_SESSION['otp']=$rndno;
header( "Location: form-verification-event.php" );
}
}
} else {}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SME Event Alert | SME Chamber of India</title>
        <meta name="keywords" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event">
        <meta name="description" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event, Get detail about SME Chamber of India Event, Event Alert, Notification about upcoming event in  sme chamber of india">
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!--<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>-->
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
                                <h1 style="text-transform: capitalize;">Register For Event Alert</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>Register For Event</li>
                </ul>
                <section class="membership-form" >
                    <div class="container" >
                        <div class="row-fluid">
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
                            <form action="" method="post" id="mform" class="member-form" >
                                <div class="panel-main-standard panel-form">
                                    <h1>Add Your Name For Event Information</h1>
                                    <p>Fields marked with a <span class="emp">*</span> are required.</p>
                                    <div class="form">
                                        <div class="field">
                                            <div class="control-label"><strong>Your Details</strong></div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Your name">Name <span class="emp">*</span></label>
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
                                            <label class="control-label" for="Business Activity">Business Activity <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="businessactivity" type="text" id="businessactivity" class="text" required value="<?php echo isset($_GET['businessactivity']) ? $_GET['businessactivity'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Business Sector">Business Sector <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="businesssector" type="text" id="businesssector" class="text" required value="<?php echo isset($_GET['businesssector']) ? $_GET['businesssector'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Business Interest">Business Interest <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="businessinterest" type="text" id="businessinterest" class="text" required value="<?php echo isset($_GET['businessinterest']) ? $_GET['businessinterest'] : "" ?>">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Looking For Support">Looking for Support from Chamber <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="lookingsupport" type="text" id="lookingsupport" class="text" required value="<?php echo isset($_GET['lookingsupport']) ? $_GET['lookingsupport'] : "" ?>">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="12" minlength="12" onkeypress="return isNumber(event)" title="Please enter exactly 1 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="email" type="text" id="email" class="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <?php
                           //  require_once('recaptchalib.php');
                          //  $publickey = "6Lfd30YUAAAAAOf90yHYwPp33602d1_7MufX-yzD"; // you got this from the signup page
                          //   echo recaptcha_get_html($publickey);
                           // ?>
                            <?php 
                           // if (isset($_REQUEST['captchaError'])){
                             //   ?>
<!--                            <b style="color: red">Incorrect Captcha Entered!</b>-->
                                    <?php
                           // };
                          
                           // ?>
                                   <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>  
                                    </div>
                                    <input type="submit" name="form_hash" value="Submit"  class="btn-continue" >
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
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.quicksand.js"></script>
        <script src="js/script.js"></script>
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

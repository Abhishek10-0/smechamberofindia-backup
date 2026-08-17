<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];

	if (isset($_POST['form_hash_indian'])) {
			
	$username = "smechm";
	$password = "sme123";
	$type = "TEXT";
	$sender = "SMECHM";
	$mobileNumber = $_POST["phone"];

	$rndno=rand(100000, 999999);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://198.15.88.194/sendsms/bulksms.php?username=$username&password=$password&type=$type&sender=$sender&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20SMECHM",
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
  
	  $_SESSION['company_name']=$_POST['company_name'];
		$_SESSION['f_name']=$_POST['f_name'];
		$_SESSION['l_name']=$_POST['l_name'];
		$_SESSION['designation']=$_POST['designation'];
		$_SESSION['business_activity']=$_POST['business_activity'];			
		$_SESSION['email']=$_POST['email'];
		$_SESSION['phone']=$_POST['phone'];
		$_SESSION['city']=$_POST['city'];
		$_SESSION['state']=$_POST['state'];				
		$_SESSION['topic']=$_POST['topic'];
		$_SESSION['otp']=$rndno;
		header( "Location: discussion_verify.php" );
	}
} 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Call For Discussion | SME Chamber of India</title>
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
      <link rel="stylesheet" type="text/css" href="css/form-bootstrap.min.css" />		
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
                  <h1 style="text-transform: capitalize;">Call For Discussion</h1>
                </div>
              </div>
            </div>
          </div>
          <ul class="breadcrumb" style="padding-left: 85px;">
            <li><a href="index.php">Home</a></li>
            <li>Call For Discussion</li>
          </ul>
          <section class="membership-form" >
            <div class="container" >
              <div class="row">
						 		<h3 style="font-size:25px; font-weight:600; text-align: center; padding-bottom: 20px;">Call For Discussion</h3>
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
									<div class="col-md-3">
										</div>
										  <div class="col-md-6">
                        <div style="float:none;margin:auto;padding: 30px;background: #f4f4f4;"> 
                          <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
														<form action="" method="post">
														  <div class="form-group">
															<label>Company Name <span class="emp">*</span></label>
															<input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
														  </div>
														  <div class="form-group">
															<label>First Name <span class="emp">*</span></label>
															<input type="text" name="f_name" class="form-control" placeholder="First Name" required>
														  </div>
														  <div class="form-group">
															<label>Last Name <span class="emp">*</span></label>
															<input type="text" name="l_name" class="form-control" placeholder="Last Name" required>
														  </div>
														  <div class="form-group">
															<label>Designation <span class="emp">*</span></label>
															<input type="text" class="form-control" name="designation" placeholder="Designation" required>
														  </div>
														  <div class="form-group">
															<label>Business Activity <span class="emp">*</span></label>
															<input type="text" class="form-control" name="business_activity" placeholder="Business Activity" required>
														  </div>
														  <div class="form-group">
															<label>Email <span class="emp">*</span></label>
															<input type="email" class="form-control" name="email" placeholder="Email" required>
														  </div>
														  
														  <div class="form-group">
															<label>Mobile Number <span class="emp">*</span></label>
															<input type="text" class="form-control" name="phone" placeholder="add 91 before 10 digit number" maxlength="12" minlength="12" pattern="\d{12}$" title="Please enter exactly 12 digits" onkeypress="return isNumber(event)" required>
														  </div>
														  <div class="form-group">
															<label>City <span class="emp">*</span></label>
															<input type="text" class="form-control" name="city" placeholder="City" required>
														  </div>
														  <div class="form-group">
															<label>State <span class="emp">*</span></label>
															<input type="text" class="form-control" name="state" placeholder="State" required>
														  </div>
														   <div class="form-group">
															<label>Topic For Discussion <span class="emp">*</span></label>
															<textarea type="text" class="form-control" name="topic" rows="4"></textarea>
															
														  </div>
															<input type="hidden" value="Indian" name="membership_type">
															<input type="hidden" value="India" name="country">
															<!--<div class="g-recaptcha form-group" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>-->
						                  <input type="submit" name="form_hash_indian" value="Submit" class="btn btn-primary" />
														</form>
													</div>
												</div>
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
				<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
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

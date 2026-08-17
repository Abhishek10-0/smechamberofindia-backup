
<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];
  if (isset($_POST['form_hash'])) {	 
    $email = $_POST["email"];		
    $sql = "INSERT INTO email_popup (email) VALUES ('$email')";
      if ($conn->query($sql) === TRUE) {	
        http_response_code(200);
        $successMSG = "Thank You! Your message has been sent.";
			  header( "Location: membership-success.php" );
		    //Multiple BCC, same as CC above;
		    //$headers .= 'Bcc: example@gmail.com' . "\r\n";
        # Send the email.
      } else {
        $errMSGs = "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
else {}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>SME Chamber of India</title>
    <meta name="Description" content="Small & Medium Business Development Chamber of India is the leading National premier Chamber, working for the growth of SMEs from Manufacturing and Service Sectors for the last 30 years."> 
    <meta name="Keywords" content="Sme Chamber of India  Empowering SMEs for Global Competitiveness">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link href="css/update-responsive.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" type="text/css" />
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/shortcodes.css" type="text/css">
    <link rel="stylesheet" href="css/color-shortcodes.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="js/highlighter/shCoreDefault.css"/>
    <link type="text/css" rel="stylesheet" href="js/highlighter/shCore.css"/>
    <script src="js/html5.js" type="text/javascript"></script>
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">        
    <!-- pop up -->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>	
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

<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
#overlay1 {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}

.popup1{
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
text-align: center;
height: 820px;
overflow: auto;
left: 33%;
    top: 1%;
}

.popup1 .cnt223{
min-width: 500px;
    width: 500px;
    min-height: 150px;
    margin-top: 1%;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
display: inline-block;

}
.popup{
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
text-align: center;
height: 820px;
overflow: auto;
left: 33%;
    top: 1%;
}

.popup .cnt223{
min-width: 500px;
    width: 500px;
    min-height: 150px;
    margin-top: 1%;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
display: inline-block;

}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.form-group> input[type="text"] {
    padding: 10px;
    font-size: 18px;
	width:94%;
}
form{
	margin: 25px 0 10px;
}
button.close{
	position: absolute;
	font-size: 35px;
}
button.btn{
	font-size:18px;
}
@media (max-width: 767px){
div#inner1 {
    margin-bottom: 20px;
    width: 100% !important;
}
.popup1{
	left: 5%;
}
.popup1 .cnt223{
	min-width:300px;
	width:300px;
}
}
.Support .bx-pager-item {
    display: none !important;
}
.member1 .bx-wrapper .bx-pager, .bx-wrapper .bx-controls-auto {
    bottom: -50px;
}
.Support ul li {
    border: 1px solid #ccc;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
  font-weight: 700;
}
.form :where(.input-box input, .select-box),  input[type="text"], input[type="email"] {
  position: relative;
  height: 40px;
  width: 95%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
</style>
  <script type='text/javascript'>
    $(function(){
    setTimeout(function() {
    var overlay = $('<div id="overlay"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup1').show();
    $('.close1').click(function(){
    $('.popup1').hide();
    overlay.appendTo(document.body).remove();
    return false;
    });

    $('.x').click(function(){
    $('.popup1').hide();
    overlay.appendTo(document.body).remove();
    return false;
    });
    });
    }, 0);
  </script>

  <script type='text/javascript'>
    $(function(){
    setTimeout(function() {
    var overlay = $('<div id="overlay"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup').show();
    $('.close').click(function(){
    $('.popup').hide();
    overlay.appendTo(document.body).remove();
    return false;
    });

    $('.x').click(function(){
    $('.popup').hide();
    overlay.appendTo(document.body).remove();
    return false;
    });
    });
    }, 0);
  </script>
<!-- end pop up-->
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
    <link rel="stylesheet" href="css/swc.css">
    <!--<script src="js/detect_location.js" type="text/javascript"></script>-->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
    <script>
		  // Initialize Firebase
      var config = {
      apiKey: "AIzaSyBQGz60NoQY0nwVA5u2I8aCpao4WU9BO9E",
      authDomain: "smechamberofindia-321f4.firebaseapp.com",
      databaseURL: "https://smechamberofindia-321f4.firebaseio.com",
      projectId: "smechamberofindia-321f4",
      storageBucket: "smechamberofindia-321f4.appspot.com",
      messagingSenderId: "235711516161"
    };
    firebase.initializeApp(config);
    // Retrieve Firebase Messaging object.
    const messaging = firebase.messaging();
    // Add the public key generated from the console here.
    messaging.usePublicVapidKey("BIJNVvY1155L5e-XFh3ZodKBvZrpof3CF3anrrS1W8ne5zf4GDxETIxODaenrY_RQaKtGkOEWcrtjWX3bY0gv5A");
    navigator.serviceWorker.register('./js/firebase-messaging-sw.js')
      .then((registration) => {
        messaging.useServiceWorker(registration);
        console.log("Done registration");
        messaging.requestPermission().then(function () {
        console.log('Notification permission granted.');
        // TODO(developer): Retrieve an Instance ID token for use with FCM.
        if (isTokenSentToServer()) {
          console.log("Token already persisted.");
          } else {
          getRegToken();
        }
      }).catch(function (err) {
        console.log('Unable to get permission to notify.', err);
      });
      // Request permission and get token.....
    });
    messaging.onMessage(function (payload) {
      console.log('Message Received: ', payload);
      notificationTitle = payload.data.title;
      notificationOptions = {
        body: payload.data.body,
        icon: payload.data.icon,
        tag: payload.data.tag
    };
                //var notification = new Notification(notificationTitle, notificationOptions);
                navigator.serviceWorker.getRegistration('./js/firebase-messaging-sw.js').then(function (registration) {
                    if (registration) {
                        registration.showNotification(notificationTitle, notificationOptions);
                    }
                });
            });

            self.addEventListener('notificationclick', function (event) {
                console.log(event.notification);
                var tag = event.notification.data.tag;
                event.notification.close(); // Android needs explicit close.
                event.waitUntil(
                        clients.openWindow(tag)
                        );
            });

            function getRegToken() {
                // Get Instance ID token. Initially this makes a network call, once retrieved
                // subsequent calls to getToken will return from cache.
                messaging.getToken().then(function (currentToken) {
                    if (currentToken) {
                        persistToke(currentToken);
                        console.log(currentToken);
                        setTokenSentToServer(true);
                    } else {
                        // Show permission request.
                        console.log('No Instance ID token available. Request permission to generate one.');
                        setTokenSentToServer(false);
                    }
                }).catch(function (err) {
                    console.log('An error occurred while retrieving token. ', err);
                    //showToken('Error retrieving Instance ID token. ', err);
                    setTokenSentToServer(false);
                });
            }


            function setTokenSentToServer(sent) {
                window.localStorage.setItem('sentToServer', sent ? '1' : '0');
            }
            function isTokenSentToServer() {
                return window.localStorage.getItem('sentToServer') === '1';
            }
            function persistToke(currentToken) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log("Token persisted successfully !");
                    }
                };
                xhttp.open("POST", "action.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("token=" + currentToken);
            }

        </script>

<!--pop up-->

    </head>
    <body>
	<!--pop up-->
	
	
<!-- pop up -->
<div class='popup1'>
<div class='cnt223' style="background-color: white;">
<div class="button" style="text-align:right;">
<button type="button" class="close1" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
		</div>
		<div class="abc1" >
		<a href="https://smeevents.in/KIS/" target="blank">
  <img src="https://smedatabank.com/Mailers/images/KIS-POST.gif" style="height: 650px">
  </a>
		
</div>
<br/>
	  
</div>
</div>

<div class='popup'>
<div class='cnt223' style="background-color: white;">
<div class="button" style="text-align:right;">
<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
		</div>
		<div class="abc1" style="padding: 230px 0px;">
		<?php
										  if (!empty($successMSG)) {
											echo '<div class="alert alert-success mb-4 alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
												'.$successMSG.'
											</div>';
											}

											if (!empty($errMSGs)) {
											echo '<div class="alert alert-danger mb-4 alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
												'.$errMSGs.'
											</div>';
											}
										  ?>
		<h3>Registration Form</h3>
          <form method="post" action=""  class="form" enctype = "multipart/form-data">
		
		 <div class="column">
          <div class="input-box">
          <label>Email Address <span class="emp">*</span></label>
          <input name="email" type="email" class="text" placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required >
        </div>
		 
		<button type="submit" value="Submit" name="form_hash">Submit</button>
        </div>
		</form> 
</div>
<br/>
	  
</div>
</div>
    
<!-- pop up end-->
    
<!-- pop up end-->

        <div id="wrapper">
            <?php include 'header.php'; ?>
			<?php
$now = new DateTime('now');
$comparison_date = new DateTime('1993-02-29'); // roughly 10 years ago
$interval = $now->diff($comparison_date); // returns DateInterval object
$years_difference = $interval->y;

?>
            <div id="main">
                <div id="banner">
                    <div id="imgGallary">
                        <ul id="home-banner">
                            <li> <img src="images/slider images/banner-3.jpg" alt="img" style="height:350px"></li>
                            <li> <img src="images/slider images/banner-2.jpg" alt="img" style="height:350px"></li>
                            <li> <img src="images/slider images/banner-1.jpg" alt="img" style="height:350px"></li>
                        </ul>
                    </div>
                </div>
                
				</div>
				<section class="contact-page">
                    <div class="container">
					<div class="row-fluid">
                        <div class="col-md-12 col-md-offset-1" >
                            <h2 style="padding-top: 3%; font: 300 24px/24px 'Roboto Slab', serif; text-align: center; text-transform: uppercase; ">About Us</h2>
                                <p style="text-align: justify; font: 400 14px/22px 'Open Sans', sans-serif;">SME Chamber of India, a premier national Chamber, has been working for the 
								development of SMEs from manufacturing, service sectors and allied industrial / business sectors for the last <?php echo $now . $years_difference; ?> years. The Chamber integrates SMEs, large 
								corporates, MNCs, banks, investors, policy makers, Young & Women entrepreneurs and Start–Ups to establish and enhance contacts for better business growth 
								and expansion.</p>
                                <p style="text-align: justify; margin-top: 1%; font: 400 14px/22px 'Open Sans', sans-serif;">
                        The Chamber has been on a forefront for policy implementation, policy change 
						and encouraging SMEs to avail of various incentives, government schemes as well 
						as business and investment opportunities in the era of Make-In-India. The Chamber 
						organises various activities to impart knowledge, skills, scale and provides a platform 
						for promotion of products and services, enhancement of contacts for the business growth,
						utilisation of unique marketing and branding facilities, advance technology for improvement of 
						capabilities & productivity, quality assurance, utilisation of benefits and advantages of various 
						government departments for domestic and export promotion.    
                        <a href="introduction.php">Read More....</a>
                        </p>
                        </div>
                        <!--<div class="col-md-5 col-md-offset-1" style="margin-top: 30px;">
                            <video width="100%" height="315" controls>
                                 <source src="https://smechamberofindia.com/images/vp/Introduction-SME-Chamber-of-India.mp4" type="video/mp4">
                                 
                            </video>
                        </div>-->
					 </div>	
                    </div>
                   
                 </section>
                

                <section class="partners-section" id="channel-partner">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="button-box" style="text-align: center; padding-left: 3%;">
                                <div class="colors-btn" style="margin-top: 30px;">
                                    <a class="btn-small color-10">strategic Partners</a>
                                </div>
                            </div>
                            <ul class="partners-slider">
                          
                                  <!--<li>
                                    <a href="https://forms.office.com/r/tLK88fc9FP" target="_blank">
                                        <img src="images/channel-partners/TTBS.jpg" alt="Tata Tele Business Services">
                                    </a>
                                </li>-->
				<li>
                                    <a href="https://aws.amazon.com/events/smb/india/" target="_blank">
                                        <img src="images/channel-partners/AWS.jpg" alt="AWS">
                                    </a>
                                </li>
								<li>
                                    <a href="https://www.airtel.in/business/" target="_blank">
                                        <img src="images/channel-partners/Airtel.jpg" alt="Airtel Business">
                                    </a>
                                </li>
								<!--<li>
                                    <a href="https://www.goto.com/" target="_blank">
                                        <img src="images/channel-partners/GoTo.jpg" alt="My BIZ by Make My Trip">
                                    </a>
                                </li>-->
								<!--<li>
                                    <a href="https://www.fedex.com/en-in/shipping/small-business.html?cmp=BAC-1006962-1-1-952-1000000-IN-IN-EN-smedislogo" target="_blank">
                                        <img src="images/channel-partners/Fedex.jpg" alt="FedEx">
                                    </a>
                                </li>-->
								 <li>
                                    <a href="https://www.tataaia.com/urja.html" target="_blank">
                                        <img src="images/channel-partners/TATA-AIA.jpg" alt="Bhumi World">
                                    </a>
                                </li>
								
                                <li>
                                    <a href="http://www.bhumiworld.in/" target="_blank">
                                        <img src="images/channel-partners/Bhumi.jpg" alt="Bhumi World">
                                    </a>
                                </li>
								
								<li>
                                    <a href="https://www.qatarairways.com/en-in/corporate-travel/join-now.html?Cid=SCIndia" target="_blank">
                                        <img src="images/channel-partners/QATAR1.jpg" alt="Qatar Airways">
                                    </a>
                                </li>
                         
                                <!--<li>
                                    <a href="http://www.wevio.com/" target="_blank">
                                        <img src="images/channel-partners/wevio.jpg" alt="Wevio Global">
                                    </a>
                                </li>-->
                                <li>
                                    <a href="https://loanxpress.com/" target="_blank">
                                        <img src="images/channel-partners/LoanExpress.jpg" alt="LoanXpress">
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="http://geoptech.com/" target="_blank">
                                        <img src="images/channel-partners/Geoptech.jpg" alt="Geoptech Solutions Pvt. Ltd.">
                                    </a>
                                </li>-->
                                                         
                            </ul>
                        <!--</div><br>-->
                   
                </section>
				
				
				<section class="partners-section" id="Divisions">
                    <div class="container">
                        <div class="row-fluid" Style="text-align:center;">
                            <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Event Sponsors</a>
                                </div>
                            </div>
							
							<ul class="partners-slider">
                                <li>
                                   <a href="https://www.onlinesbi.sbi/" target="_blank">
                                        <img src="images/Sponsor/sbi.jpg" alt="State Bank of India" >
                                    </a>
									
                                </li>
								<li>
                                   <a href="https://bankofindia.co.in/" target="_blank">
                                        <img src="images/Sponsor/boi.jpg" alt="Bank of India" >
                                    </a>
									
                                </li>
								<li>
                                   <a href="https://www.pnbindia.in/" target="_blank">
                                        <img src="images/Sponsor/pnb.jpg" alt="Punjab National Bank" >
                                    </a>
									
                                </li>
								<li>
                                   <a href="https://www.tataaia.com/" target="_blank">
                                        <img src="images/Sponsor/tata.jpg" alt="Tata AIA Life Insurance" >
                                    </a>
									
                                </li>
								<li>
                                  <a href="https://www.mcxindia.com/" target="_blank">
                                        <img src="images/Sponsor/MCX.jpg" alt="MCX" >
                                    </a>
									
                                </li>
								<!--<li>
                                   <a href="https://www.tatapower.com/" target="_blank">
                                        <img src="images/Sponsor/tatapower.jpg" alt="Tata Power" >
                                    </a>
									
                                </li>-->
						  </ul>
							       
							
						</div>
                    </div>
                </section>


				

                <section class="partners-section" id="initiatives">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="button-box" style="text-align: center; padding-left: 3%;">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Initiatives</a>
                                </div>
                            </div>
                            <ul class="partners-slider">
                                <li>
                                    <a href="https://smetalks.com/" target="_blank">
                                        <img src="images/initiatives/SME-Talks.jpg" alt="SMETalks">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smecoach.in/" target="_blank">
                                        <img src="images/initiatives/SMECOACH.png" alt="SME Coach">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://brandsmes.com/" target="_blank">
                                        <img src="images/initiatives/brandsme.png" alt="Brand SME">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeinstituteofindia.com/" target="_blank">
                                        <img src="images/initiatives/SMEBUSINESS.png" alt="SME Business Management Institute">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeepcofindia.com/" target="_blank">
                                        <img src="images/initiatives/SMEEPC.png" alt="SME Export Promotion Council">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeconnect.in/" target="_blank">
                                        <img src="images/initiatives/SMECONNECT.png" alt="SME Connect">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeimporters.com/" target="_blank">
                                        <img src="images/initiatives/SIAI.png" alt="SME Importers Association of India">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.smetechcouncil.com/" target="_blank">
                                        <img src="images/initiatives/STDC.png" alt="SME Technology Development Center">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smebusinessforum.com/" target="_blank">
                                        <img src="images/initiatives/smebusinessforum.png" alt="SME Business Forum">
                                    </a>
                                </li>
                            </ul>
                        <!--</div><br>-->



                </section>
                <section class="partners-section" id="Divisions">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Divisions</a>
                                </div>
                            </div>
                            <ul class="partners-slider">
                                <li>
                                    <a href="https://startupscouncilofindia.com/" target="_blank">
                                        <img src="images/partners/startup.png" alt="Start-Ups Council of India">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smefinancecentre.com/" target="_blank">
                                        <img src="images/partners/SFFC.png" alt="SME Finance Facilitation Centre">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wedcindia.com/" target="_blank">
                                        <img src="images/partners/wedc.png" alt="Women Entrepreneures Development Council">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.smejobs.in/" target="_blank">
                                        <img src="images/partners/EXI.png" alt="Employment Exchange for Indian SMEs">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeforumofindia.com/" target="_blank">
                                        <img src="images/partners/SMEFORUM.png" alt="SME Forum of India">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeknowledgeforum.com/" target="_blank">
                                        <img src="images/partners/ISMEK.png" alt="Indian SME Knowledge Forum">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://smeresearchcentre.com/" target="_blank">
                                        <img src="images/partners/SRCI.png" alt="SME Research Centre of India">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
				
					<section class="contact-page">
                    <div class="container">
					 <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Supported Events</a>
                                </div>
                            </div>
					 <div class="row" style="margin-left: 0px;">
					 <div class="col-md-6 Support" style="padding-left: 0px; width: 47% !important;">
                           <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">National Supported Events</a>
                                </div>
                            </div>
							
							 <ul class="partners-slider">
							 
							     <li>
								   <a href="https://exporegistration.in/corrupackprintindia-visitor.aspx" target="_blank" >
                                        <img src="Supported_Events/corrupack2.jpg" alt="Corru Pack Print India" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=29" target="_blank" >
                                        <img src="Supported_Events/tech.jpg" alt="Capwise" >
                                    </a>
								</li>
								
								 <li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=30" target="_blank" >
                                        <img src="Supported_Events/intrapack.jpg" alt="Intrapack" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=38" target="_blank" >
                                        <img src="Supported_Events/Cospack_banner1.jpg" alt="Cospack" >
                                    </a>
								</li>
							  
							
							    <li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=39" target="_blank" >
                                        <img src="Supported_Events/PVE_Banner.jpg" alt="Capwise" >
                                    </a>
								</li>
								 <li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=40" target="_blank" >
                                        <img src="Supported_Events/MFE.gif" alt="Capwise" >
                                    </a>
								</li>
								
                            </ul>
                        
                           
                        
                        </div>
                    
					 <div class="col-md-6 Support" style="padding-left: 0px; width: 47% !important;">
                         <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">International Supported Events</a>
                                </div>
                            </div>
                             <ul class="partners-slider">
							
							    <li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=41" target="_blank" >
                                        <img src="Supported_Events/MIAMI-Expo.jpg" alt="MIAMI Expo" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.smechamberofindia.com/support1.php?id=42" target="_blank" >
                                        <img src="Supported_Events/jordan.jpg" alt="International Food and Technology Expo" >
                                    </a>
								</li>
							  
                            </ul>
                        
                        </div>
                    
                        
					  </div>
					</div>
                    </div>
                 </section>

				
				
				<section class="contact-page">
                    <div class="container">
					 <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Members</a>
                                </div>
                            </div>
					 <div class="row" style="margin-left: 0px;">
					 <div class="col-md-6" style="padding-left: 0px; width: 47% !important;">
                           <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Premium Members</a>
                                </div>
                            </div>
                            <ul class="partners-slider">
							
							    <li>
								   <a href="https://www.ecfos.in/" target="_blank" >
                                        <img src="images/members/ecfo.jpg" alt="ECFOs" >
                                    </a>
								</li>
							    <li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/shitter.jpg" alt="shitter" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://capwisefin.com/" target="_blank" >
                                        <img src="images/members/capwise.jpg" alt="Capwise" >
                                    </a>
								</li>
							  
							
							  <li>
								   <a href="https://www.aeroflexindia.com/" target="_blank" >
                                        <img src="images/members/aeroflex.jpg" alt="AEROFLEX" >
                                    </a>
								</li>
							  
							  <li>
								   <a href="https://vatsalexports.com/" target="_blank" >
                                        <img src="images/members/vatsal.jpg" alt="Vatsal Exports LLP" >
                                    </a>
								</li>
									<li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/nitin.jpg" alt="nitin" >
                                    </a>
								</li>
							    
								
							  <li>
								   <a href="https://www.shantichem.com/" target="_blank" >
                                        <img src="images/members/shanti.jpg" alt="Shanti Chemical Works" >
                                    </a>
								</li>
							
							   <li>
								   <a href="https://www.meteoricbiopharma.com/" target="_blank" >
                                        <img src="images/members/meteoric.jpg" alt="Meteoric Biopharmaceuticals Limited" >
                                    </a>
								</li>
							
							   <li>
								   <a href="https://rawiacare.com/" target="_blank" >
                                        <img src="images/members/rawia.jpg" alt="Rawia International Healthcare Pvt Ltd" >
                                    </a>
								</li>
								
							   <li>
								   <a href="https://mascot-systems.com/" target="_blank" >
                                        <img src="images/members/mascot.jpg" alt="Mascot Systems Private Limited" >
                                    </a>
								</li>
							
							   <li>
								   <a href="https://www.tli-tradelink.com/" target="_blank" >
                                        <img src="images/members/tradelink.jpg" alt="Tradelink International Private Limited" >
                                    </a>
								</li>
							    
							  <li>
								   <a href="https://bhagwatiorganics.com/" target="_blank" >
                                        <img src="images/members/bhagwati.jpg" alt="Bhagwati Organics Private Limited" >
                                    </a>
								</li>
								
                                <li>
								   <a href="https://www.jeevanchemicals.com/" target="_blank" >
                                        <img src="images/members/jeevan.jpg" alt="Jeevan Chemicals" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.k-techindia.com/" target="_blank" >
                                        <img src="images/members/K-TECH.jpg" alt="K-TECH (INDIA) LIMITED" >
                                    </a>
								</li>
								<li>
								   <a href="https://www.zerodindustries.com/" target="_blank" >
                                        <img src="images/members/zero.jpg" alt="zero" >
                                    </a>
								</li>
								<li>
								   <a href="https://chalkwalkconsulting.com/" target="_blank" >
                                        <img src="images/members/ChalkWalk.jpg" alt="ChalkWalk" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.otterindia.com/" target="_blank" >
                                        <img src="images/members/otter.jpg" alt="otter" >
                                    </a>
								</li>

                                <li>
								   <a href="https://renergieglobal.com/" target="_blank" >
                                        <img src="images/members/reglo.jpg" alt="RéGLO Industries Pvt Ltd" >
                                    </a>
								</li>

                                 <li>
								   <a href="https://www.esarwa.com/" target="_blank" >
                                        <img src="images/members/esarwa.jpg" alt="ESARWA" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://leomi.in/" target="_blank" >
                                        <img src="images/members/leomi.jpg" alt="leomi" >
                                    </a>
								</li>

                                 <li>
								   <a href="http://www.gmarch.in/" target="_blank" >
                                        <img src="images/members/architech.jpg" alt="G M Architech" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.balajiinks.com/" target="_blank" >
                                        <img src="images/members/Balaji.jpg" alt="Balaji Inks & Chemicals Pvt Ltd" >
                                    </a>
								</li>
                                <li>
								   <a href="https://www.metachempaints.com/" target="_blank" >
                                        <img src="images/members/meta.jpg" alt="META-CHEM" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.aurobees.com/" target="_blank" >
                                        <img src="images/members/Aurobees-logo.jpg" alt="Aurobees" >
                                    </a>
								</li>
								<li>
								   <a href="https://marknstamp.com/" target="_blank" >
                                        <img src="images/members/marknstamp.jpg" alt="Stamp'IT Robotai & Solutions Pvt. Ltd." >
                                    </a>
								</li>
								<li>
								   <a href="https://www.lasertechnologies.co.in/" target="_blank" >
                                        <img src="images/members/LTPL.jpg" alt="Laser Technologies Pvt Ltd" >
                                    </a>
								</li>
								
								
                            </ul>
                        
                        </div>
                    
                        <div class="col-md-6 col-md-offset-1 member1" style="width: 49% !important;">
                            <div class="button-box" style="text-align: center; padding-left: 3%">
                                <div class="colors-btn">
                                    <a class="btn-small color-10">Annual Members</a>
                                </div>
                            </div>
                            <ul class="partners-slider">
							
							    <li>
								   <a href="https://nirmitiprecision.com/" target="_blank" >
                                        <img src="images/members/NPPL.jpg" alt="Nirmiti Precision" >
                                    </a>
								</li>
							
							    <li>
								   <a href="https://technowaters.com/" target="_blank" >
                                        <img src="images/members/techno.jpg" alt="Techno Water" >
                                    </a>
								</li>
							
							    <li>
								   <a href="https://www.netprophetsglobal.com/" target="_blank" >
                                        <img src="images/members/netpro.jpg" alt="NetProphets Cyberworks" >
                                    </a>
								</li>
							
							
							    <li>
								   <a href="https://aplusatech.com/" target="_blank" >
                                        <img src="images/members/aplusa.jpg" alt=" AplusA Technologies Pvt. Ltd." >
                                    </a>
								</li>
							
							    <li>
								   <a href="https://www.terahertzengg.com/" target="_blank" >
                                        <img src="images/members/terahertz.jpg" alt="Terahertz Engineering Services Pvt. Ltd." >
                                    </a>
								</li>
							
							    <li>
								   <a href="https://finnup.in/" target="_blank" >
                                        <img src="images/members/finnup.jpg" alt="FinnUp Solutions Pvt Ltd" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.pranjal.co.in/" target="_blank" >
                                        <img src="images/members/pranjal.jpg" alt="Pranjal Group" >
                                    </a>
								</li>
							
							    <li>
								   <a href="https://www.saawariyaenterprise.com/" target="_blank" >
                                        <img src="images/members/saavariya.jpg" alt="Saawariya Enterprise" >
                                    </a>
								</li>
								
								
							
								<li>
								   <a href="https://www.pazago.com/" target="_blank" >
                                        <img src="images/members/pazago.jpg" alt="Pazago" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://www.linkedin.com/in/mahendra-arya-42059a17" target="_blank" >
                                        <img src="images/members/buransh.jpg" alt="buransh capital management services" >
                                    </a>
								</li>
                                 <li>
								   <a href="https://uginfotek.com/" target="_blank" >
                                        <img src="images/members/infotek.jpg" alt="UGInfotek " >
                                    </a>
								</li>
                                <li>
								   <a href="http://www.mjomegasolution.in/" target="_blank" >
                                        <img src="images/members/mjomega1.jpg" alt="MJOMEGA SOLUTIONS PRIVATE LIMITED" >
                                    </a>
								</li>
                            
                               <li>
								   <a href="https://www.unitedengineersindia.in/" target="_blank" >
                                        <img src="images/members/united.jpg" alt="United Engineers And Consultants" >
                                    </a>
								</li>
                               
							   <li>
								   <a href="https://www.preminfra.com/" target="_blank" >
                                        <img src="images/members/Prem.jpg" alt="Prem Engineering and Infra Projects " >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.facebook.com/p/Dhruv-Agro-Industries-100067758330567/" target="_blank" >
                                        <img src="images/members/Dhruv.jpg" alt="Dhruv Agro Industries " >
                                    </a>
								</li>
								
							   <li>
								   <a href="https://www.arthaarthwealth.com/" target="_blank" >
                                        <img src="images/members/arthaarth.jpg" alt="Aarttarth Wealth Management Private Limited" >
                                    </a>
								</li>
							    
								<li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/marvelous.jpg" alt="Marvelous Engineers Private Limited" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://vesim.ves.ac.in/" target="_blank" >
                                        <img src="images/members/vivekanand.jpg" alt="Vivekanand Education Society" >
                                    </a>
								</li>
								
								
							   <li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/haute.jpg" alt="Haute Couture/ Beyond Z consulting LLP" >
                                    </a>
								</li>
							
							
							   <li>
								   <a href="https://www.aiaims.edu.in/" target="_blank" >
                                        <img src="images/members/allana.jpg" alt="ALLANA INSTITUTE OF MANAGEMENT STUDIES" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.schmersal.in/home" target="_blank" >
                                        <img src="images/members/schmersal.jpg" alt="Schmersal Group" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.mslogistic.in/" target="_blank" >
                                        <img src="images/members/MS_Logo.jpg" alt="M S Logistics" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://in.linkedin.com/in/durgeshbhatthr" target="_blank" >
                                        <img src="images/members/beaconz.jpg" alt="Beaconz HR" >
                                    </a>
								</li>
							
							    <li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/elegant.jpg" alt="Elegant Success Impressions" >
                                    </a>
								</li>
							
							     <li>
								   <a href="https://wayar.in/" target="_blank" >
                                        <img src="images/members/wayar.jpg" alt="Wayar" >
                                    </a>
								</li>
							   
							    <li>
								   <a href="https://www.sgphyto.com/" target="_blank" >
                                        <img src="images/members/phyto.jpg" alt="S. G. PHYTO PHARMA PVT. LTD" >
                                    </a>
								</li>
							     <li>
                                    <a href="https://aarushfires.com/" target="_blank">
                                        <img src="images/members/aarush.jpg" alt="Aarush Fire Systems Pvt. Ltd." >
                                    </a>
                                </li>
								 <li>
								   <a href="https://www.krugerfan.com/" target="_blank" >
                                        <img src="images/members/kruger.jpg" alt="Kruger Ventilation Industries (India) Private Limited" >
                                    </a>
								</li>
								
							     <li>
								   <a href="https://www.neshiel.com/" target="_blank" >
                                        <img src="images/members/neshiel.jpg" alt="Neshiel Agrochem Private Limited" >

                                    </a>
								</li>
							     <li>
								   <a href="https://www.profectuscapital.com/" target="_blank" >
                                        <img src="images/members/profectus.jpg" alt="Profectus Capital" >
                                    </a>
								</li>
								<li>
								   <a href="https://egogroupindia.com/" target="_blank" >
                                        <img src="images/members/ego.jpg" alt="Ego Group India" >
                                    </a>
								</li>
							
							     <li>
								   <a href="https://www.bizzsetu.com/" target="_blank" >
                                        <img src="images/members/bizzsetu.jpg" alt="BizzSetu" >
                                    </a>
								</li>
								<li>
								   <a href="https://www.yujdesigns.com/" target="_blank" >
                                        <img src="images/members/yuj.jpg" alt="yuj" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://cfocraft.com/" target="_blank" >
                                        <img src="images/members/cfo_craft.jpg" alt="CFO CRAFT " >
                                    </a>
								</li>
								
								 <li>
								   <a href="https://marcglocal.com/" target="_blank" >
                                        <img src="images/members/mangal.jpg" alt="Mangal Analytics and Research Consulting (MARC)" >
                                    </a>
								</li>
								
								
								
								 <li>
								   <a href="https://bluwheelz.co.in/" target="_blank" >
                                        <img src="images/members/bluwheelz.jpg" alt="BluWheelz" >
                                    </a>
								</li>
								
								 <li>
								   <a href="https://www.ericapparels.com/" target="_blank" >
                                        <img src="images/members/eric.jpg" alt="ERIC APPAREL" >
                                    </a>
								</li>
								
								 <li>
								   <a href="https://oxxyy.com/" target="_blank" >
                                        <img src="images/members/oxxyy.jpg" alt="Oxxyy Tech" >
                                    </a>
								</li>
								
								 <li>
								   <a href="http://www.ideasnu.com/" target="_blank" >
                                        <img src="images/members/ideas_exports.jpg" alt="ideasnu" >
                                    </a>
								</li>
							
							    <li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/sixty.jpg" alt="Sixty" >
                                    </a>
								</li>
							
							   <li>
								   <a href="https://sskotwal.in/" target="_blank" >
                                        <img src="images/members/Shashank.jpg" alt="Shashank Kotwal & Associates" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://www.clubsurilimusic.com/" target="_blank" >
                                        <img src="images/members/surili.jpg" alt="Club Surili Virasat" >
                                    </a>
								</li>
							    <li>
								   <a href="https://www.dtspl.in/" target="_blank" >
                                        <img src="images/members/dynamic.jpg" alt="Dynamic Trans System Private Limited" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://www.paragonind.com/" target="_blank" >
                                        <img src="images/members/paragon.jpg" alt="Paragon Fine And Speciality Chemical Limited" >
                                    </a>
								</li>
							    <li>
								   <a href="https://kpce.in/" target="_blank" >
                                        <img src="images/members/kpce.jpg" alt="Khandelwal Pharma And Cosmetic Equipments" >
                                    </a>
								</li>
							
							     <li>
								   <a href="https://www.starflexifilms.com/" target="_blank" >
                                        <img src="images/members/star.jpg" alt="STAR Flexi Film" >
                                    </a>
								</li>
								
							    <li>
								   <a href="https://hemochrom.com/" target="_blank" >
                                        <img src="images/members/hemochrom.jpg" alt="Hemochrom" >
                                    </a>
								</li>
							    
							    <li>
								   <a href="https://bizicard.in/mvnarayan" target="_blank" >
                                        <img src="images/members/N_K_Consultants.jpg" alt="N K Consultants" >
                                    </a>
								</li>
							     <li>
								   <a href="#" target="_blank" >
                                        <img src="images/members/M0dilipi.jpg" alt="M0dilipi" >
                                    </a>
								</li>
								
								<li>
								   <a href="http://airflow.in/" target="_blank" >
                                        <img src="images/members/air_flow.jpg" alt="AIRFLOW" >
                                    </a>
								</li>
							    <li>
								   <a href="https://www.keka.com/" target="_blank" >
                                        <img src="images/members/keka.jpg" alt="Keka" >
                                    </a>
								</li>
								<li>
								   <a href="https://fablas.com/" target="_blank" >
                                        <img src="images/members/fablas.jpg" alt="fablas" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.gheewalajobs.com/" target="_blank" >
                                        <img src="images/members/gheewala.jpg" alt="gheewala" >
                                    </a>
								</li>
								<li>
								   <a href="https://inco.in/" target="_blank" >
                                        <img src="images/members/inco.jpg" alt="inco" >
                                    </a>
								</li>
																
								<li>
								   <a href="http://www.wflogisticsgroup.com/" target="_blank" >
                                        <img src="images/members/logistics.jpg" alt="logistics" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.houseofmantra.in/" target="_blank" >
                                        <img src="images/members/MANTRA.jpg" alt="MANTRA" >
                                    </a>
								</li>
								<li>
								   <a href="https://nikopas.com/" target="_blank" >
                                        <img src="images/members/nkp.jpg" alt="nkp" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.techimbibe.com/" target="_blank" >
                                        <img src="images/members/techimbibe.jpg" alt="techimbibe" >
                                    </a>
								</li>
								
								
                                <li>
                                    <a href="https://grabeco.in/" target="_blank">
                                        <img src="images/members/grabec.jpg" alt="Schon Ultrawares Pvt. Ltd." >
                                    </a>
                                </li>
                                
								<li>
								   <a href="https://ogpteck.com/" target="_blank" >
                                        <img src="images/members/ogp.jpg" alt="Om Gajanan Packaging" >
                                    </a>
								</li>
								<li>
								   <a href="https://insuresecure.in/Default.aspx" target="_blank" >
                                        <img src="images/members/insure.jpg" alt="Insure & Secure" >
                                    </a>
								</li>
								<li>
								    <a href="https://www.chembizintl.com/" target="_blank" >
                                        <img src="images/members/chembiz.jpg" alt="Chembizintl Solutions Private Limited" >
                                    </a>
								</li>
								<li>
								   <a href="https://vseconsultants.com/" target="_blank" >
                                        <img src="images/members/vsec.jpg" alt="VijayaSankalpa Engineers & Consultants Pvt. Ltd" >
                                    </a>
								</li>
								<li>
								   <a href="https://prempower.in/" target="_blank" >
                                        <img src="images/members/prem_power.jpg" alt="PREM POWER PRODUCTS LLP." >
                                    </a>
								</li>
								
								<li>
								   <a href="http://affcil.com/" target="_blank" >
                                        <img src="images/members/affcil.jpg" alt="AFFCIL INDUSTRRIES " >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.ramdevcoatings.com/" target="_blank" >
                                        <img src="images/members/ramdev.jpg" alt="BD Software" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://bdsoft.in/" target="_blank" >
                                        <img src="images/members/Bd_software.jpg" alt="Ramdev Resins Pvt. Ltd." >
                                    </a>
								</li>  
								
								<li>
								   <a href="http://www.trustindiagroup.com/" target="_blank" >
                                        <img src="images/members/trust.jpg" alt="Trust Travels" >
                                    </a>
								</li>
								
								
								
								<li>
								   <a href="https://www.ecubix.com/" target="_blank" >
                                        <img src="images/members/ecubix.jpg" alt="Ecubix solutions" >
                                    </a>
								</li>
								
								
								
								<li>
								   <a href="https://www.thermopack.in/" target="_blank" >
                                        <img src="images/members/therm.jpg" alt="Therm O Pack" >
                                    </a>
								</li>
								
								<li>
								   <a href="http://www.magmatechnologies.co.in/" target="_blank" >
                                        <img src="images/members/magma.jpg" alt="Magma Technology" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.eximtrade.in/" target="_blank" >
                                        <img src="images/members/EximTrade.jpg" alt="EximTrade Consulting Services Private Limited" >
                                    </a>
								</li>
								
								
								<li>
								   <a href="https://www.chaitanyagroupindia.com/" target="_blank" >
                                        <img src="images/members/chaitanya.jpg" alt="Chaitanya Group" >
                                    </a>
								</li>
								<li>
								   <a href="https://www.dexceldigitalhub.com/" target="_blank" >
                                        <img src="images/members/dexcel.jpg" alt="Dexcel Digital Hub Pvt. Ltd. " >
                                    </a>
								</li>
								
								<li>
								   <a href="http://www.formdesignindia.com/" target="_blank" >
                                        <img src="images/members/form_design.jpg" alt="Form Design India Pvt. Ltd." >
                                    </a>
								</li>
								<li>
								   <a href="https://www.kddl.com/" target="_blank" >
                                        <img src="images/members/kddl.jpg" alt="KDDL " >
                                    </a>
								</li>
								<!--<li>
								   <a href="https://kppl.in/" target="_blank" >
                                        <img src="images/members/Logo-krsna.jpg" alt="Krsna Packaing Pvt. Ltd." >
                                    </a>
								</li>-->
								<li>
								   <a href="https://www.minipackindia.com/" target="_blank" >
                                        <img src="images/members/Minipack.jpg" alt="Minipack" >
                                    </a>
								</li>
								<li>
								   <a href="https://nellifecareproducts.com/" target="_blank" >
                                        <img src="images/members/NEL.jpg" alt="NEL lifecare products pvt ltd" >
                                    </a>
								</li>
								<li>
								   <a href="https://dppulveriser.com/" target="_blank" >
                                        <img src="images/members/pulveriser.jpg" alt="DP® Pulveriser Industries" >
                                    </a>
								</li>
								
								
								<li>
								   <a href="https://www.tendermitra.org/" target="_blank" >
                                        <img src="images/members/tender.jpg" alt="TENDER MITRA" >
                                    </a>
								</li>
								<li>
								   <a href="https://www.subsidysolutions.in/" target="_blank" >
                                        <img src="images/members/amplus.jpg" alt="Amplus Subsidy Solutions" >
                                    </a>
								</li>
								
								<li>
								   <a href="http://www.allieddigital.net/" target="_blank" >
                                        <img src="images/members/ADSL.jpg" alt="Allied" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.asmelters.in/" target="_blank" >
                                        <img src="images/members/associated.jpg" alt="Associated Smelters Private Limited" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://cashcowconsulting.in/" target="_blank" >
                                        <img src="images/members/cashcow.jpg" alt="cashcow" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://kdsgroup.co.in/" target="_blank" >
                                        <img src="images/members/kds_new.jpg" alt="KDS Group" >
                                    </a>
								</li>
								
								<li>
								   <a href="https://mantraa.com/" target="_blank" >
                                        <img src="images/members/mantraa.jpg" alt="mantraa" >
                                    </a>
								</li>
								
								
								
							
								<li>
								   <a href="https://www.sublimis.tech/" target="_blank" >
                                        <img src="images/members/sublimis.jpg" alt="Sublimis" >
                                    </a>
								</li>
								
								
								
								<li>
								   <a href="https://www.techorizon.in/" target="_blank" >
                                        <img src="images/members/Techorizon.jpg" alt="Techorizon" >
                                    </a>
								</li>
								
								<li>
								   <a href="http://www.kpsbio.com/" target="_blank" >
                                        <img src="images/members/KPS.jpg" alt="KAYPEEYES BIOTECH PRIVATE LIMITED " >
                                    </a>
								</li>
								
								<li>
								   <a href="https://www.vrfaircon.com/" target="_blank" >
                                        <img src="images/members/VRF.jpg" alt="Aricon Pvt. Ltd." >
                                    </a>
								</li>
								<li>
								   <a href="https://www.brennanit.com.au/" target="_blank" >
                                        <img src="images/members/Brennan.jpg" alt="Brennan IT" >
                                    </a>
								</li>
							</ul>
                        
						
						</div>
					  </div>
					</div>
                    </div>
                 </section>

                <section class="widget-box" id="joinus">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="button-box" style="text-align: center; margin-left: 3%">
                                <div class="colors-btn" >
                                    <a class="btn-small color-10">Join Us</a>
                                </div>
                            </div>
							<div class="span2" style="margin-left:0px;">
                                <div class="widget-box-inner">
                                    <div class="round">
									    <a href="call_for_discussion.php" class="inner"><i class="fa fa-comments"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">Call for <br> Discussion</p>
                                       </div>
                                </div>
                            </div>
							<div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round">
									 <a href="membership.php" class="inner"><i class="fa fa-users"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">Membership</p>

                                    </div>
                                </div>
                            </div>

                            
                            <div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round"><a href="strategic_partner.php" class="inner"><i class="fa fa-cogs"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">Strategic Partnership</p>
                                    </div>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round"><a href="event-form.php" class="inner"><i class="fa fa-file-text"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">Events Alert</p>
                                    </div>
                                </div>
                            </div>

                            <div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round"><a href="sme-consultants.php" class="inner"><i class="fa fa-cog"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">SME Consultants</p>

                                    </div>
                                </div>
                            </div>
                              
                            
                            <div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round"><a href="directory-excel-form.php" class="inner"><i class="fa fa-database"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;"> SME Directory</p>

                                    </div>
                                </div>
                            </div>
                            <div class="span2">
                                <div class="widget-box-inner">
                                    <div class="round">
                                        <a href="http://indiasmeawards.com/" target="_blank" class="inner"><i class="fa fa-tasks"></i></a><br>
                                        <p align="center" style=" font: 400 13px/16px 'Open Sans', sans-serif; font-weight: bold;">India SME Excellence Awards</p></div>
                                </div>
                            </div>                                                   
                            <!--                            <div class="span2">
                                                            <div class="widget-box-inner">
                                                                <div class="round"><a href="add-name-whatsapp.php" class="inner">
                                                                        <i class="fa fa-whatsapp"></i></a><br>
                                                                    <p align="center">Whatsapp <br> Group</p></div>
                                                            </div>
                                                        </div>-->
                        </div>
                        <!-- <br>-->
                     

</section>

				
				<?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
<!--        <script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.quicksand.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
		<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>
		
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
<!--        <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>-->
        <script src="js/swc.js" type="text/javascript"></script> 
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>--> 
        <script>
            (function () {
                var imgLen = document.getElementById('imgGallary');
                var images = imgLen.getElementsByTagName('img');
                var counter = 1;

                if (counter <= images.length) {
                    setInterval(function () {
                        images[0].src = images[counter].src;
                        console.log(images[counter].src);
                        counter++;

                        if (counter === images.length) {
                            counter = 1;
                        }
                    }, 4000);
                }
            })();
        </script>
<!--Popup Script-->
  
<script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup1").style.display = "block";
        },
       0 
    )
});


document.querySelector("#close1").addEventListener("click", function(){
    document.querySelector(".popup1").style.display = "none";
});
    </script>
 

   </body>
</html>




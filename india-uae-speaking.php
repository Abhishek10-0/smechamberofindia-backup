<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>INDIA - UAE Business & Investment Summit | SME Chamber of India</title>
        <meta name="keywords" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event">
        <meta name="description" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event, Get detail about SME Chamber of India Event, Event Alert, Notification about upcoming event in  sme chamber of india">
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

    </head>
    <body>
        <div id="wrapper"> 
            <?php include 'header.php'; ?>
            <div id="main">
                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: capitalize;">INDIA - UAE BUSINESS & INVESTMENT SUMMIT</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="event.php">Forthcoming Events</a></li>
                    <li>Register For Event</li>
                </ul>
                <section class="membership-form" >
                    <div class="container" >
                        <div class="row-fluid">
                            <form action="india-uae-speaking-email.php" method="post" id="mform" class="member-form" >
                                <div class="panel-main-standard panel-form">
                                    <h1>Register for Speaking Opportunity </h1>
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
                                            <label class="control-label" for="Contact Detail">Mobile Number: <span class="emp">*</span></label>
                                            <div class="controls">
                                             <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." class="text" maxlength="10" pattern="^\d{10}$" title="Please enter exactly 10 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="email" type="text" id="email" class="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Topic">Topic for Speech <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="topic" type="text" id="topic" class="text" required value="<?php echo isset($_GET['topic']) ? $_GET['topic'] : "" ?>">
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
                                    <input type="submit" name="submit" value="Submit"  class="btn-continue" >
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
       
    </body>

</html>

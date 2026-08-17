<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Membership | SME Chamber of India</title>
    <meta name="keywords" content="Membership form Download, SME Chamber of India Membership form">
    <meta name="description" content="Download Membership form SME Chamber of India">
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
  </head>
  <body>
    <div id="wrapper"> 
      <?php include 'header.php'; ?>
        <div id="main">
          <div id="banner" style="height: 75px;">
            <div id="inner-banner">
              <div class="container">
                <div class="row-fluid">
                  <h1 style="text-transform: capitalize;">Download Membership form</h1>
                </div>
              </div>
            </div>
          </div>
          <ul class="breadcrumb" style="padding-left: 85px;">
            <li><a href="index.php">Home</a></li>
            <li>Membership</li>
          </ul>
          <section class="membership-form" >
            <div class="container" >
              <div class="row-fluid">
                <form method="post" action="DownloadOverseasmembershipemail.php"  id="mform" class="member-form" >
                  <div class="panel-main-standard panel-form">
                    <h1 style="font-size: 1.3em; text-align: center;"><b>Download Membership Form </b>
                      <!--<input type="checkbox" name="information" value="<?php echo isset($_GET['information']) ? $_GET['information'] : "" ?>"> Event Alerts <b>|</b>
                      <input type="checkbox" name="information" value="<?php echo isset($_GET['information']) ? $_GET['information'] : "" ?>" >Business opportunity<b>|</b>
                      <input type="checkbox" name="information" value="<?php echo isset($_GET['information']) ? $_GET['information'] : "" ?>"> Business News <b>|</b>
                      <input type="checkbox" name="information" value="<?php echo isset($_GET['information']) ? $_GET['information'] : "" ?>" > Government Schemes-->
                      <!--<b style="color: red; font-size: .7em;">Event Alerts |</b> <b style="color: red; font-size: .7em;">Business opportunity |</b> 
                      <b style="color: red; font-size: .7em;"> Government Schemes | </b>   <b style="color: red; font-size: .7em;"> News  </b>-->
                    </h1>
                    <p>Fields marked with a <span class="emp">*</span> are required.</p>
                    <div class="form">
                      <div class="field">
                        <label class="control-label" for="Company Name">Name <span class="emp">*</span></label>
                        <div class="controls">
                          <input name="companyname" type="text" id="companyname" class="text" value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>" required>
                        </div>
                      </div>
                      <div class="field">
                        <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                        <div class="controls">
                          <input name="companyname" type="text" id="companyname" class="text" value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>" required/>
                        </div>
                      </div>
                      <div class="field">
                        <label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
                        <div class="controls">
                          <input name="designation" type="text" id="designation" class="text" value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>" required/>
                        </div>
                      </div>
                      <div class="field">
                        <label class="control-label" for="Mobile Number">Mobile Number: <span class="emp">*</span></label>
                        <div class="controls">
                          <input type="text" name="mobilenumber" id="mobilenumber" class="text" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>" required/>
                          <!--<input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>"/>-->
                        </div>
                      </div>
                      <div class="field">
                        <label class="control-label" for="Email:">Email <span class="emp">*</span></label>
                        <div class="controls">
                          <input name="email" type="email" id="email" class="text" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>" required />
                        </div>
                      </div>
                      <br>
                      <?php
                        //require_once('recaptchalib.php');
                        //$publickey = "6Lfd30YUAAAAAOf90yHYwPp33602d1_7MufX-yzD"; // you got this from the signup page
                        //echo recaptcha_get_html($publickey);
                      ?>
                      <?php
                      //if (isset($_REQUEST['captchaError'])) {
                      ?>
                      <!--<b style="color: red">Incorrect Captcha Entered!</b>-->
                      <?php
                      // };
                      ?>
                    <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
                  </div>
                  <input type="submit" value="Submit" class="btn-continue" />
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
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
  </body>
</html>

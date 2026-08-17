<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SME Directory | SME Chamber Of India</title>
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
                                <h1 style="text-transform: capitalize;">Add Your Name In SME Directory</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>SME Directory</li>
                </ul>
                <section class="membership-form">
                    <div class="container" >
                        <div class="row-fluid">
                            <form method="post" action="sme-directory-email.php"  id="mform" class="member-form" >
                                <div class="panel-main-standard panel-form">
                                    <h1>Add Your Name In SME Directory</h1>
                                    <p>Fields marked with a <span class="emp">*</span> are required.</p>
                                    <div class="form">
                                        <div class="field">
                                            <div class="control-label"><strong>Your Details</strong></div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="For Name">Name <span class="emp">*</span></label>
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
                                            <label class="control-label" for="Interested for Membership">Interested for Membership<span class="emp">*</span></label>
                                            <div class="controls">
                                                <select name="membership" id="membership" class="select" required >
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <script type="text/javascript">
                                            document.getElementById('membership').value = "<?php echo $_GET['membership'];?>";
                                            </script>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Event Information">Event Information<span class="emp">*</span></label>
                                            <div class="controls">
                                                <select name="information" id="information" class="select" required>
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <script type="text/javascript">
                                            document.getElementById('information').value = "<?php echo $_GET['information'];?>";
                                            </script>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Support From Chamber">Looking for Support From Chamber <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="supportchamber" type="text" id="supportchamber" class="text" required value="<?php echo isset($_GET['supportchamber']) ? $_GET['supportchamber'] : "" ?>">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="10"  pattern="^\d{10}$" title="Please enter exactly 10 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                                            </div>
                                        </div>

                                        <div class="field">
                                            <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="email" type="email" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Addresss">Address <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                                            </div>
                                        </div>

                                         <?php
                           //  require_once('recaptchalib.php');
                            //$publickey = "6Lfd30YUAAAAAOf90yHYwPp33602d1_7MufX-yzD"; // you got this from the signup page
                            // echo recaptcha_get_html($publickey);
                            ?>
                            <?php 
                           // if (isset($_REQUEST['captchaError'])){
                                ?>
                           <!-- <b style="color: red">Incorrect Captcha Entered!</b> -->
                                    <?php
                           // };
                          
                            ?>
                                      <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>      
                                        
                                    </div>
                                    <input type="submit" value="Submit"  class="btn-continue" />
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
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
        
    </body>
<?php include 'config.php'; ?>
</html>

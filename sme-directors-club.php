<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SME Directors Club| SME Chamber of India</title>
    <meta name="keywords" content="Directors club for SMEs, SMEs Director, Join SME Directors Club, SME Chamber Of India , Enquiry , Join Desicion Maker Group in Small Companies.">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
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
  </head>
  <body>
    <div id="wrapper"> 
    <?php include 'header.php'; ?>
      <div id="main">
        <div id="banner" style="height: 75px;">
          <div id="inner-banner">
            <div class="container">
              <div class="row-fluid">
                <h1 style="text-transform: capitalize;">SME Directors Club</h1>
              </div>
            </div>
          </div>
        </div>
        <ul class="breadcrumb" style="padding-left: 85px;">
          <li><a href="index.php">Home</a></li>
          <li>SME Directors Club</li>
        </ul>
        <div style="padding: 0 45px 20px 45px;">
          <p style="text-align: justify;">
          SME Chamber of India, a premier national Chamber, has been working for the development of SMEs from manufacturing, service sectors and allied industrial / business sectors for the last 25 years. The Chamber integrates SMEs, large corporates, MNCs, banks, investors, policy makers, Young & Women entrepreneurs and Start–Ups to establish and enhance contacts for better business growth and expansion.
          </p>
        </div>
        <section class="membership-form" >
          <div class="container" >
          <div class="row-fluid">
            <form action="director-em.php" method="POST" class="member-form" >
              <div class="panel-main-standard panel-form">
                <h1>Submit Your Detail For SME Directors Club</h1>
                <p>Fields marked with a <span class="emp">*</span> are required.</p>
                <div class="form">
                  <div class="field">
                   <div class="control-label"><strong>Your Details</strong></div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Your Name">Name <span class="emp">*</span></label>
                    <div class="controls">
                      <select name="title" id="title" class="select" style="width:86px;" required> 
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
                      <input type="text" name="firstname" id="firstname" class="text" placeholder="first name" style="width:209px;" required value="<?php echo isset($_GET['firstname']) ? $_GET['firstname'] : "" ?>">
                      <input type="text" name="lastname" id="lastname" class="text" placeholder="last name" style="width:209px;" required value="<?php echo isset($_GET['lastname']) ? $_GET['lastname'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="designation" id="designation" class="text" placeholder="Designation" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="companyname" id="companyname" class="text" placeholder="Company Name" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Main Business Activity">Main Business Activity <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="businessactivity" id="businessactivity" placeholder="Main Business Activity" class="text" required value="<?php echo isset($_GET['businessactivity']) ? $_GET['businessactivity'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                      <div class="controls">
                        <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="10" pattern="\d{10}$" title="Please enter exactly 10 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                        <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                      </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="email" name="email" id="email" class="text" placeholder="Email" required value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="address" id="address" class="text" placeholder="Address" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Contact Detail">City & District: <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="city" id="city" placeholder="City" style="width:253px;" title="Please enter city" required value="<?php echo isset($_GET['city']) ? $_GET['city'] : "" ?>">
                      <input type="text" name="district" id="district" placeholder="District" style="width:253px;"  title="Please enter district" required value="<?php echo isset($_GET['district']) ? $_GET['district'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Country & Pin Code">Country & Pin Code: <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="country" id="country" placeholder="Country" style="width:253px;"  title="Please Enter Country Name" required value="<?php echo isset($_GET['country']) ? $_GET['country'] : "" ?>">
                      <input type="text" name="pincode" id="pincode" placeholder="Pin Code" style="width:253px;" maxlength="6" pattern="\d{6}$" title="Please enter Correct Pincode" required value="<?php echo isset($_GET['pincode']) ? $_GET['pincode'] : "" ?>">
                    </div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Specific Interest">Specific Interest <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="interest" id="interest" class="text" placeholder="Specific Interest" required value="<?php echo isset($_GET['interest']) ? $_GET['interest'] : "" ?>">
                    </div>
                  </div>
                  <br>
                  <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>    
                </div>
                <input type="submit" value="Submit" class="btn-continue" />
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
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
  </body>
</html>

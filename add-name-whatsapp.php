<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add Name For Whatsapp Group | SME Chamber of India</title>
        <meta name="keywords" content="Add Name for Whatsapp Group, Whatsapp group ">
        <meta name="description" content="Add Name in Whatsapp Group, SME chamber of India Whatsapp Group, Whatsapp Group">
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
    </head>
    <body>
        <div id="wrapper"> 
            <?php include 'header.php'; ?>
            <div id="main">
                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: capitalize;">Join Whatsapp</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>Join Whatsapp Group:</li>
                </ul>
                <section class="membership-form" >
                    <div class="container" >
                        <div class="row-fluid">
                            <form action="whatsapp-email.php"  method="POST" class="member-form" >
                                <div class="panel-main-standard panel-form">
                                    <h1 style="font-size: 1.3em;"><b>Join WhatsApp Group <br>
                                            to receive Information On:</b>
                                        <b style="color: red; font-size: .7em;">Event Alerts |</b> <b style="color: red; font-size: .7em;">Business opportunity |</b> 
                                        <b style="color: red; font-size: .7em;"> Government Schemes | </b>   <b style="color: red; font-size: .7em;"> News  </b>
                                    </h1>
                                    <p>Fields marked with a <span class="emp">*</span> are required.</p>
                                    <div class="form">
                                        <div class="field">
                                            <div class="control-label"><strong>Details</strong></div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Your Name">Name <span class="emp">*</span></label>
                                            <div class="controls">
                                                <select name="title" id="title" class="select" style="width:86px;" >
                                                    <option value="">Title</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                </select>
                                                <script type="text/javascript">
                                                    document.getElementById('title').value = "<?php echo $_GET['title']; ?>";
                                                </script>
                                                <input name="fname" type="text" id="fname" class="text" placeholder="first name" style="width:209px;" value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>" required/>
                                                <input name="lname" type="text" id="lname" class="text" placeholder="last name" style="width:209px;" value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>" required/>
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
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Email:">Email <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="email"  name="email" id="email" class="text" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>" required/>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="City:">City <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="city" id="city" class="text" value="<?php echo isset($_GET['city']) ? $_GET['city'] : "" ?>" required/>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Country:">Country <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="country"  id="country" class="text" value="<?php echo isset($_GET['country']) ? $_GET['country'] : "" ?>" required/>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Business Activity">Business Activity <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="businessactivity" id="businessactivity" class="text" value="<?php echo isset($_GET['businessactivity']) ? $_GET['businessactivity'] : "" ?>" required/>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Business Interest">Business Interest <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="businessinterest" id="businessinterest" class="text" value="<?php echo isset($_GET['businessinterest']) ? $_GET['businessinterest'] : "" ?>"  required/>
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
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

    </body>

</html>

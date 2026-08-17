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
             header( "Location: form-verify_leadership.php" );
        }
    }
} 
else {}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>India SME Leadership Council | SME Chamber of India </title>
        <meta name="Description" content="Support & Services for Indian Companies from SME Chamber of India,,Business advisory services Business & Trade opportunities Connectivity with buyers, manufacturers and suppliers Procurement support in PSUs and MNCs Vendor Development in government PSUs Marketing and distributorship in India Certification of evaluation of capacity of the Company Support List in SME Stock Exchange Identifying investors or business partners Setting up manufacturing units Channelise Finance from Banks and Financial Institutions Private Equity / Venture Capital Project, Export Finance & External Commercial Borrowings Term loans in local & foreign currency limits Vendor finance facility Factoring and forfeiting services Finance facility for participation in International Exhibitions NPA settlements Restructuring and revival of financially stressed SMEs Export business enquiries and Import facilitation Contract manufacturing tie-ups with overseas companies Joint ventures, collaborations and technology transfers Business alliances with overseas SMEs and companies Identification of buyers, importers and distributors Sourcing advanced technology, machinery & equipment Marketing and distributorship in specific markets">
        <meta name="Keywords" content="Support & Services for Indian Companies from SME Chamber of India, SUPPORT & SERVICES INDIAN SMEs DOMESTIC BUSINESS OPPORTUNITY & GROWTH, INTERNATIONAL BUSINESS CONNECTIVITY AND OPPORTUNITIES">
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
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
         <link rel="stylesheet" type="text/css" href="css/screen.css" />
         <link rel="stylesheet" type="text/css" href="css/screen.form.css" />
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
        <script src="js/html5.js" type="text/javascript"></script>

    <!-- End Facebook Pixel Code -->
    </head>        
    <body>
        <div id="wrapper">
            <?php include 'header.php'; ?>
            <div id="main">
                <div id="banner" style="height: 97px;">
                    <div id="inner-banner" style="padding: 27px 0px 19px 0px">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: none;">India SME Leadership Council</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Initiatives</a></li>
                    <li>India SME Leadership Council</li>
                </ul>
                <section class="welcome-text-box" style="margin-top: 1%">
                    <div class="container">
                        <div class="row-fluid">
                            <p style="text-align: justify;">
                                SMEs contribute towards economic growth, employment generation and innovation. The good management strategy for SMEs should be development of a sound plan and design of an appropriate organizational structure. Good business leadership is a pre-requisite for the effective accomplishment of these tasks. In SME Sector, an entrepreneur is the chief administrator, planner, chief risk bearer and a strategy implementer, crises solver, figure head, spokesperson and policy maker and takes care of Marketing, Branding, Promotion, Sales and puts efforts for a sustainable growth.  
                            </p><br/>
                            <p style="text-align: justify;">
                                The entrepreneur has to play another important role of team building, creating confidence amongst investors, lenders, suppliers, buyers, international partners and other stakeholders, to achieve growth of the Company towards expansion and diversification. The entrepreneurship requires role-modelling, intellectual stimulation, stimulating knowledge diffusion, providing vision, consulting, delegating, providing support for innovation, organizing feedback, recognizing, rewarding, providing resources, monitoring, task assignment and unlimited efforts and energy to contribute towards the effectiveness and success of the business enterprise.
                            </p>                            
                        </div>
                        <hr>
                         <div class="row-fluid">
                             <h2>About</h2>
                             <p style="text-align: justify;">
                                India SME Leadership Council is instituted by SME Chamber of India and SME Business Management Institute to provide a platform to successful Entrepreneurs from Small & Medium industries and business sector to connect, establish business cooperation, explore emerging business opportunities, present unique & remarkable business achievements, contribution towards industrial, business growth and empowerment & strengthening existing and rising Enterprises to compete at Local and International market. The main objective of the Council is to establish the group of Entrepreneurs, who are looking for transformation of businesses into emerging enterprises and 10x business growth at National and International level. The enterprise who is having business turnover of Rs. 50 crores or above, will be entitled to enrol as the member of the Council.
                            </p>

                             <p style="text-align: justify;">
                                This Council will integrate Entrepreneurs, policy makers, business tycoons, technocrats, thought leaders, CEOs of various corporates, MNCs, Financial Institutions, International Organisations & Diplomats, Dignitaries and Experts from various fields to support SMEs, Young & Women Entrepreneurs and Start-Ups to address, guide, mentor as well as support them to resolve, issues & problems and convert new ideas & concepts, innovation, invention into commercialization and execute unique business & investment proposals, promote new products and services to explore emerging businesses.
                            </p>

                            <p style="text-align: justify;">
                                India SME Leadership Council has initiated groups of Entrepreneurs to accomplish the above objectives. The main chapter and Head Quarter will be at Mumbai and the Council will set up other chapters at Delhi, Ahmedabad, Bangalore, Pune, Hyderabad, Vadodara, Coimbatore, Chennai, Rajkot, Nagpur, Surat, Indore, Jaipur and Kolkata.
                            </p>
                         </div>
                         <hr/>
                        <div class="row-fluid">
                            <h2>Vision</h2>
                            <p style="margin: 1%;"> &#9673; &nbsp; Establish group of successful Entrepreneurs </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Guide and mentor potential SMEs for 10x growth </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Connect Entrepreneurs to establish new business partnership</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Development of Entrepreneurial leadership quality</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Exchange of knowledge, experience and success</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Empowering Young & Women Entrepreneurs and Start-Ups</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Supporting Family Managed Businesses for better growth</p>                           
                        </div>
                        <hr>
                        <div class="row-fluid">
                            <h2>Mission</h2>                           
                            <p style="margin: 1%;"> &#9673; &nbsp; Preparing Entrepreneurs for better business growth </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Forming group for exploring emerging business opportunities </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Supporting for skill and scale development </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Support for wealth creation and wealth management </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Transforming SMEs into emerging enterprise / corporate </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Supporting SMEs for global footprint </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Setting up SME family office </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Strengthening struggling SMEs for better growth & profitability </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Recognizing remarkable achievements and contribution </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Establishing group for joint marketing and promotion </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Setting up fund for business growth and expansion </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Channelizing finance, ECB, private equity and investment </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Support and guidance for innovation and invention </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Assistance for International collaborations and joint ventures </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Establishing group of family managed businesses </p>
                        </div>
                        <hr>

                        <div class="row-fluid">
                            <h2>Objectives</h2>
                            <p style="text-align: justify;">
                                The main objective of the Council is to honor the successful Entrepreneurs, who are the role models for younger generations and small and medium entrepreneurs, with outstanding accomplishments in their business activities. Eminent speakers representing the Government Departments, Regulators, Banks, Financial Institutions, Venture Capital, Private Equity, Credit Rating Agencies, Management, Financial, Legal, HR, Marketing Consultants, Industry Leaders, Subject Matter Experts and other Professionals, will highlight their thoughts and interact with the members, non-members and subscribers of the Council.
                            </p>
                        </div>
                        <hr/>
                        <div class="row-fluid">
                            <h2>Activities</h2>
                            <p style="margin: 1%;"> &#9673; &nbsp; Monthly networking meetings at Mumbai and various chapters</p> 
                            <p style="margin: 1%;"> &#9673; &nbsp; Sharing views, achievements and experience at SMETalks Shows </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Exchange of business leads, referrals, inquiries, business ideas and new concepts</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Networking dinner and cocktails </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Organise regularly “India SME Leadership Summit / Round Table Meets”</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Establishment of experts group and committees </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Special publication on “Rising SMEs of India” </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Review of various Government policies and regulations </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Interaction with tycoons, industrialist & CEOs of corporates </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Interface with policy makers and Government officials </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Motivation and mentoring session </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Executive training program for improvement of skill & scale </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Round table discussion on current affairs, issues, technology and invention </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Factory and project visits – National & International</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Conference, Seminars and Webinars </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Interviews on TV business channels and leading newspapers </p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Publishing achievements in SMEConnect magazine</p>
                            <p style="margin: 1%;"> &#9673; &nbsp; Formulating valuable suggestions for policy change & implementation</p>
                        </div>
                        <div class="row-fluid">
                            <h2>Initiatives</h2>
                            <p style="text-align: justify;">
                                India SME Leadership Council will bring together, the business and thought leaders from all over the world from manufacturing and different sectors, policy makers, heads of corporates, who will debate on important aspects of the leadership/entrepreneurship  vision, clarity, future orientation, stability, challenges, abstractness and desirability or ability to inspire. The Council will analyze different kinds of leadership styles in relation to the multicultural environment and to identify effective leadership strategies for SMEs. This will also discuss on, how leaders can be made capable of steering people in the right direction to achieve its mission, vision and to remain faithful to the philosophy and values of the organization, to unite the organization to work towards the organization’s goal, which is critical to the organization’s performance and success.
                            </p>
                        </div>
                        <hr/>
                        <h3>Contact us to know more about the membership, advantages and activities: <b><a href="javascript:showform();" ></a></b> </h3><br/>
                        <div class="row-fluid">
                            <div class="container" id="myDIV" >
                              <form method="post" action=""  id="mform" class="member-form" >
                                <div class="panel-main-standard panel-form">
                                    <h2>Add Your Name to Become India SME Leadership Council</h2>
                                    <p>Fields marked with a <span class="emp">*</span> are required.</p>
                                    <div class="form">
                                        <div class="field">
                                            <div class="control-label"><strong>Your Details</strong></div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Your Name">Name <span class="emp">*</span></label>
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
                                                <input name="interest" type="text" id="interest" class="text" required value="<?php echo isset($_GET['interest']) ? $_GET['interest'] : "" ?>"> 
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Detail Of Products & Services to promote amongst SMEs">Details of Products & Services to promote amongst SMEs <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="service" type="text" id="service" class="text" required value="<?php echo isset($_GET['service']) ? $_GET['service'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Business Sectors of SMEs">Business Sectors of SMEs <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="sectorsme" type="text" id="sectorsme" class="text" required value="<?php echo isset($_GET['sectorsme']) ? $_GET['sectorsme'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="12" pattern="^\d{12}$" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                                                
                                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="email" type="text" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Enter a valid Email Address" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                                            <div class="controls">
                                                <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                                            </div>
                                        </div>
                                        <input name="form_name" type="hidden" value="Channel Partner">
                                          <br>
                                         
                                        <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>       
                                    </div>
                                    <input type="submit" value="Submit" name="form_hash" class="btn-continue" />
                                </div>
                            </form>
                        </div>   
                    </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
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
    </body>

</html>

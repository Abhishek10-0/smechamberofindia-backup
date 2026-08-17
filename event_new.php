<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>SME-Forthcoming Events | SME Chamber of India</title>
        <meta name="keywords" content="Full Event Description , SME Chamber of India Events,Chamber events, Conference of SME Chamber of India, Upcoming Events, SME Chamber of India Upcoming Events, Events Full Description, Latest Events of SME Chamber of INDIA">
        <meta name="description" content="SME Chamber of India Forthcoming Events, Forthcoming Events, SME Events, Latest Events of SME chamber , Latest Upcoming Events">
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
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
<style>
.col-md-12{
	width:100%
}
.col-md-6 {
    width: 48%;
	float: left;
	padding:1%;
}
</style>

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
                            <h1>Forthcoming Events</h1>
                        </div>
                    </div>
                </div>
            </div>
             <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li>Forthcoming</li>
            </ul>
            <section class="blog-page">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                                    <?php include 'config.php'; ?>  
                                    <?php
                                    $id = $_GET["id"];
                                    $sql = "SELECT * from events_sme where ide=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                       
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
<div style="font: bold 30px Arial, Helvetica, sans-serif;  color: #042e84; padding:5px 0px 0px 0px; border-bottom: 3px solid;">
    <span><?php echo $row["event_name"] ?></span>
	<span style="float:right; font-size:20px;"><b style="color: #250990; ">Registration Form: </b>
	<?php echo $row["reg_form"] ?> </span></div>
<div style="font: normal 20px Arial, Helvetica, sans-serif; color: #000;  margin: 10px 0; border-bottom: 2px solid #999; padding-bottom: 10px;">
    <span><b style="color: #250990; font-size: 1.1em;">Event Date: </b> 
	<?php echo $row["event_day"] ?> <?php echo $row["event_month"] ?> 
	<b style="font-size: 1.5em;"> , </b> <b style="color: #250990; font-size: 1.1em;">Time: </b>
	<?php echo $row["event_time"] ?>  <b style="font-size: 1.5em;"> , </b>
	<b style="color: #250990; font-size: 1.1em;">Event Venue: </b>
	<?php echo $row["event_place"] ?>  <b style="font-size: 1.5em;">  </b> 
</span> 
</div>
                           
                                                <?php
                                            }
                                        }
                                      
                                        ?>
                                                                   
                                  
                                           
                                               
                          
                        </div>

 
                    </div>
                
				
				    <div class="row-fluid">
					<div class="col-md-6">
                       <img src="image/GISS.jpg" alt="" />
					</div>  
                    <div class="col-md-6">
                       The Expert Dialogue on "Strengthening national statistical systems - linking country experiences to global and regional initiatives" will be organized by ESCAP Statistics Division the day before the Committee on Statistics, Eighth Session.

The event will be held on 22 August 2022, from 11:00 to 13:00 hours (Bangkok time), in person and by invitation only, at MR-A, UNCC, Bangkok, Thailand.

<ul><li>Flyer</li>
<li>Concept note</li>
<li>Register here</li>
</ul>
					</div>  					
                    </div>
                
				</div>
            </section>
			

            <?php include 'footer.php'; ?>
        </div>
    </div>
<!--    <script src="js/jquery.js" type="text/javascript"></script>-->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.plugin.js"></script>
    <!--<script src="js/jquery.countdown.js"></script>-->
    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/jquery-filterable.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="js/styleswitch.js"></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
<!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    
    <script src="https://allevents.in/scripts/public/ae-plugin-lib-button.js"></script>

</body>

</html>

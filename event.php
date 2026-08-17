<?php include 'config.php'; ?>  
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>ForthComing Events | SME Chamber of India</title>
        <meta name="keywords" content="Networking Event for SMEs, EventForthcoming Events Of SME Chamber Of India, upcoming Events of SME Chamber of Inida">
        <meta name="description" content="Up-Coming Events of SME Chamber of India, Latest Event ,Next Coming Event of SME Chamber of inida">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet'  href='css/style.min20b9.css?ver=1.0.2' type='text/css' media='all' /> 
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <!--<link rel="stylesheet" id="font-awesome-css" href="https://www.netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">-->

        <link href="css/elements.css" rel="stylesheet">
        <!--<script src="js/my_js.js"></script> it was for popup form onclick event-->

        <script src="js/html5.js" type="text/javascript"></script>
               
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
<script type="text/javascript">
$(document).ready(function(){
	$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#myTab a[href="' + activeTab + '"]').tab('show');
	}
});
</script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVPVYK16TG"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-YVPVYK16TG');
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
            .tab-content {
    overflow: initial;
}
        </style>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YVPVYK16TG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YVPVYK16TG');
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
    <div id="wrapper">
        <?php include 'header.php'; ?>
        <div id="main">
            <div id="banner" style="height: 75px;">
                <div id="inner-banner">
                    <div class="container">
                        <div class="row-fluid">
                            <h1 style="text-transform: capitalize;">Forthcoming Events</h1>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Events</a></li>
                <li>Forthcoming</li>
            </ul>
<section class="blog-page" style="background-color: #eaedf4;">
<div class="container">
   <ul class="nav nav-tabs" id="myTab">
       <li class="active"><a data-toggle="tab" href="#smechamberconference" style="font-weight: bold;">EVENTS</a></li>
        <!--<li><a data-toggle="tab" href="#supportedevent" style="font-weight: bold;">EXHIBITIONS</a></li>-->
      </ul>
<div class="row-fluid">
<div class="span12">
<section class="block block__events">
<div class="tab-content">
<div id="smechamberconference" class="tab-pane fade in active">
<?php
$sql = "SELECT * from events_sme ORDER BY Date_date ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>
        <div class="event__col event__single">
            <div class="event__date"> 
                <span class="event__day"><?php echo $row["event_day"] ?></span>
                <span class="event__month"> <?php echo $row["event_month"] ?></span>
            </div>
            <div class="event__content">
                <span class="event__title" style="text-transform:uppercase;"><a href="r-e4ad-m899778-or-asd442rdf7e-ev4532et.php?id=<?php echo $row["ide"] ?>"><?php echo $row["event_name"] ?> </span> 
				<span style="color:#0088cc"><?php echo $row["theme"] ?></span>
				</a> 
                
                <!--<span class="event__title"><b onclick="javascript:div_show_detail('<?php echo $row["ide"] ?>')" style="color: #0088cc;">
				<?php echo $row["event_name"] ?></b></span>-->
                <span class="event__info" style="color: #ff0000;"><?php echo $row["event_place"] ?></span>
            </div>
        </div><hr>
        <?php
    }
} else {
    echo "The resource you are looking for might have been removed or is temporarily unavailable.";
} ?>
        </div>
        
    </div>

                            </section>

                        </div>
                    </div>
                </div>
            </section>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <!--<script src="js/jquery.js" type="text/javascript"></script>-->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.plugin.js"></script>
<!--    <script src="js/jquery.countdown.js"></script>-->
    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/jquery-filterable.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/styleswitch.js"></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
<!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

    <!--  RB : Script for popup screen to appear-->
<!--    <div id="abc" style="z-index: 1000">
        <!//-- Popup Div Starts Here --//>
        <div id="popupContact">
             Contact Us Form 
            <form action="event-mail.php" id="form" method="post" name="form">
                <img id="close" src="images/close-icon.png" alt="close the form" onclick ="div_hide()">
                <h2 style="color: #0066cc; text-transform: none; margin: auto; padding: initial; border-bottom: none;">Get Full Information</h2>
                <hr>
                <input id="name" name="name" placeholder="Name" type="text">
                <input type="text" id="companyname" name="companyname" placeholder="Company Name">
                <input id="designation" name="designation" placeholder="Designation" type="text" >
                <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" >
                <input id="email" name="email" placeholder="Email" type="text">
                <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
                <!//-- RB:  setting page id property so that post submit we can redirect user to prebious page --//>
                <input type="hidden" name ="redirect_page_id" id="redirect_page_id" value="test"/>
                <a href="javascript:%20check_empty()" id="submit">Send</a>
            </form>
        </div>
        <!//-- Popup Div Ends Here --//>
    </div>-->
    <!--RB : Script for pop up screen ends here ???????-->
</body>
</html>

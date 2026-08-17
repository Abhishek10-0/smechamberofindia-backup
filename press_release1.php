<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Supported Exhibitions | SME Chamber of India</title>
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
                            <h1 style="text-transform: capitalize;">Supported Exhibitions</h1>
                        </div>
                    </div>
                </div>
            </div>
             <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li>Supported Exhibitions</li>
            </ul>
            <section class="blog-page">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                                    <?php include 'config.php'; ?>  
                                    <?php
                                    $id = $_GET["id"];
                                    $sql = "SELECT * from supp_ev where ide=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row

                                        while ($row = $result->fetch_assoc()) {
                                            /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
                                            ?>
<div style="font: bold 16px Arial, Helvetica, sans-serif; background: #d2cfcf; text-align: center; color: #042e84; padding: 5px 0;">
    <span><?php echo $row["event_name"] ?></span></div>
<div style="font: normal 14px Arial, Helvetica, sans-serif; color: #000; text-align: center; margin: 10px 0; border-bottom: 2px solid #999; padding-bottom: 10px;">
    <span><b style="color: #250990; font-size: 1.1em;">Event Date: </b> <?php echo $row["event_day"] ?> <?php echo $row["event_month"] ?> <b style="font-size: 1.5em;"> | </b> <b style="color: #250990; font-size: 1.1em;">Time: </b><?php echo $row["event_time"] ?>  <b style="font-size: 1.5em;"> | </b><b style="color: #250990; font-size: 1.1em;">Event Venue: </b><?php echo $row["event_place"] ?>  <b style="font-size: 1.5em;"> | </b> <b style="color: #250990; font-size: 1.1em;">Registration Form: </b><?php echo $row["reg_form"] ?> 
</span> 
</div>
                            <p style="text-align: center;"><?php echo $row["p_i"] ?></p>
                            <p style="text-align: center;"><?php echo $row["read-more"] ?> </p>
                                           
                                                <?php
                                            }
                                        }
//                                        else {
//                                            echo "0 results";
//                                        }
                                        ?>
                                                                   
                                    <?php
                                 //   $id = $_GET["id"];
                                  //  $sql = "SELECT * from supp_ev where ids=$id";
                                  //  $result1 = $conn->query($sql);
                                  //  if ($result1->num_rows > 0) {
                                        // output data of each row

                                    //    while ($row = $result1->fetch_assoc()) {
                                            /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
                                            ?>
                                          <?php echo $row["read-more"] ?>
                                           
                                                <?php
                                      //      }
                                      //  } 
//                                        else {
//                                            echo "0 results";
//                                        }
                                        ?>
                             
                           
                        </div>
<!--                        <div class="span3">
                            <aside>
                                <div id="sidebar">
                                    <form action="#" class="sidebar-form">
                                        <input name="" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" type="text" class="sidebar-input" placeholder="Search for...">
                                        <button class="sidebar-search-btn" value=""><i class="fa fa-search"></i></button>
                                        <div class="sidebar-member"> 
                                            <a href="#" class="member-icon"><i class="fa fa-user"></i></a> 
                                            <a href="membership.php" class="member-text curl-top-left">Become Our Member</a> </div>
                                    </form>
                                    <div class="sidebar-recent-post">
                                        <h3>Latest News</h3>
                                        <ul id="side_latest">

                                        </ul>
                                    </div>
                                    <div class="sidebar-recent-post">
                                        <h3>Upcoming EVEnts</h3>
                                        <ul id="sidebar_event">

                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>-->
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

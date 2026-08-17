<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gallery | Past Events | SME Chamber of India</title>
        <meta name="Description" content="Gallery of SME Chamber of Inida, photos, Photos of Interactive Meetings, Picture of SME Chamber of India">
        <meta name="Keywords" content="Gallery of SMEs Chamber of India, Photos of SME chamber of india, Picture of SME chamber of India ">
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
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" >
        <link rel="stylesheet" id="font-awesome-css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            function test(data) {
                if (document.getElementById(data).hidden)
                {
                    document.getElementById(data).hidden = false;
                } else
                {
                    document.getElementById(data).hidden = true;
                }
            }
        </script>
        <script>
            function retrive_details(data, start_year, end_year)
            {
                for (i = start_year; i <= end_year; i++)
                {
                    document.getElementById(i).hidden = true;
                }
                document.getElementById(data).hidden = false;
            }
        </script>
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
        <style type="text/css">
            a.fancybox img {
                border: none;
                box-shadow: 0 1px 7px rgba(0,0,0,0.6);
                -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); 
                -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; 
                -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
            } 
            a.fancybox:hover img {
                position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); 
                -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
            }
            #fancybox-outer{height:auto !important;}
            .span3 img {
                height: 220px;
                width: 270px;
                }
            @media (min-width: 1200px){
                .span3 {
                    width: 270px;
                    height: 234px;
                }
            }

        </style>
 

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
                                <h1 style="text-transform: none;">Past Events</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li>Past</li>
                </ul>
<section class="about-page">
<div class="container">


<div class="span12">
<div class="our-detail-box">
<div class="accordition-box">
<div class="accordion" id="accordion2">
<b>
            <?php
            for ($year = 2025; $year >= 1993; $year--) {
            ?>
            <a href="javascript:retrive_details(<?php echo $year; ?>,1994,2025)" title="<?php echo $year; ?>">
            <?php echo $year; ?></a>&nbsp;|

            <?php
            }
            ?>
            </b><br><br>

            <?php
            for ($year = 2025; $year >= 1993; $year--) {
            ?>
            <div id="<?php echo $year; ?>" hidden="true" >
            <?php include 'get-past-events.php'; ?>
            </div>
            <?php
            }
            ?>
<script lang="javascript">
document.getElementById("2025").hidden = false;   
</script>
</div>
</div>
</div>
</div>


</div>
</section>

<?php include 'footer.php'; ?>
</div>
        </div>
        <!--        <script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
<!--        <script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script> 
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
        <script type="text/javascript">
            $(function ($) {
                var addToAll = false;
                var gallery = true;
                var titlePosition = 'inside';
                $(addToAll ? 'img' : 'img.fancybox').each(function () {
                    var $this = $(this);
                    var title = $this.attr('title');
                    var src = $this.attr('data-big') || $this.attr('src');
                    var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
                    $this.wrap(a);
                });
                if (gallery)
                    $('a.fancybox').attr('rel', 'fancyboxgallery');
                $('a.fancybox').fancybox({
                    titlePosition: titlePosition
                });
            });
            $.noConflict();
        </script>

    </body>
</html>

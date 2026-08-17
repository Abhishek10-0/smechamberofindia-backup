<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>News | SME Chamber of India</title>
        <meta name="Description" content="News of SMEs, SME Chamber of India News, News, SME news, Banking News, Latest News, Current News, News about SMEs">
        <meta name="Keywords" content="NEws of SMEs, NEws of SME Chamber of India,News, SME news, Banking News, Latest News, Current News, News about SMEs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/update-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <script src="js/html5.js" type="text/javascript"></script>
        <script type="text/javascript">
            function loadXMLDoc1() {
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        // change content from div
                        document.getElementById("full-page").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "news2.php", true);
                xmlhttp.send();
            }
            // first page load
            loadXMLDoc1();
            setInterval(loadXMLDoc1, 2000);
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
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=784564702179617&ev=PageView&noscript=1"/>
        </noscript>
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
                                <h1 style="text-transform: capitalize;">News</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>News</li>
                </ul>
                <section class="blog-page">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="news-page">
                                    <ul class="gallery" id="full-page"></ul>
                                </div>
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

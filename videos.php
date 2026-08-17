<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Videos  | SME Chamber of India</title>
        <meta name="Description" content="Video of SME Chamber of Inida, Video, NEws videos of SME Chamber of India, News videos, SME Videos , Event Videos of SME Chamber of India">
        <meta name="Keywords" content="Video of SMEs Chamber of India , Events Videos, News Videos, SME chamber of videos, NEws videos , SME chamber of India Videos,">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    
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
		<style>
		.span3 img {
      height: 220px;
    }
		</style>
  </head>
    <body>
      <div id="wrapper">
        <?php include 'header.php'; ?>
        <div id="main">
          <div id="banner" style="height: 75px;">
            <div id="inner-banner">
              <div class="container">
                <div class="row-fluid">
                  <h1 style="text-transform: capitalize;">Videos </h1>
                </div>
              </div>
            </div>
          </div>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li>Videos</li>
          </ul>
          <section class="about-page">
            <div style="padding-left: 3%">
              <?php include 'config.php'; ?>  
              <?php
                //$year = $_GET['year'];
                // $sql1 = "SELECT * FROM `main_gallery`";
                $sql1 = "SELECT * from nvs ORDER BY vi DESC";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0) {
                 // output data of each row
                  while ($row1 = $result1->fetch_assoc()) {
                ?>
                <div class="span3">
                  <p>
  								  <a data-fancybox="gallery" href="<?php echo $row1["vli"]; ?>"><img src="images/vp/<?php echo $row1["vge"]; ?>.jpg"></a>
                </div>
                <?php
                    }
                  } else {
                  echo "0 results";
                }
                ?>
              </div>
            </section>
              <?php include 'footer.php'; ?>
            </div>
          </div>        
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
      <script src="js/custom.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    </body>
</html>

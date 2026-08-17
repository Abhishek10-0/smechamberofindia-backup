<?php 
// Include database configuration
include("config.php");

// Fetch past webinars from the database
$sql = "SELECT * FROM `webinar` where webinar_status = 'past' and status = '1' order by id desc" ;
$result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Past Webinars | Chamber SME Chamber of India </title>
        <meta name="Description" content="">
        <meta name="Keywords" content="">

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
        <link rel="stylesheet" type="text/css" href="css/form-bootstrap.min.css" />
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
        <link rel='stylesheet' href='css/min.css'>
        
        <style>
            /* Modern UI Grid and Card Styles */
            .webinar-section {
                padding: 40px 0;
            }
            .flex-row {
                display: flex;
                flex-wrap: wrap;
                margin-left: -15px;
                margin-right: -15px;
            }
            
            /* Custom column to strictly enforce 3 items per row */
            .custom-col-3 {
                width: 33.333333%;
                padding-left: 15px;
                padding-right: 15px;
                margin-bottom: 30px;
                box-sizing: border-box;
            }

            /* Responsive adjustments for Tablets */
            @media screen and (max-width: 991px) {
                .custom-col-3 {
                    width: 50%;
                }
            }

            /* Responsive adjustments for Mobile */
            @media screen and (max-width: 767px) {
                .custom-col-3 {
                    width: 100%;
                }
            }

            .webinar-card {
                background: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .webinar-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            }
            .webinar-thumb-wrapper {
                position: relative;
                display: block;
                width: 100%;
                padding-top: 56.25%; /* Maintains 16:9 Aspect Ratio */
                background-color: #000;
            }
            .webinar-thumb {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                transition: opacity 0.3s ease;
            }
            .webinar-thumb-wrapper::after {
                content: '';
                position: absolute;
                top: 0; left: 0; right: 0; bottom: 0;
                background: rgba(0, 0, 0, 0.2);
                transition: background 0.3s ease;
            }
            .webinar-card:hover .webinar-thumb-wrapper::after {
                background: rgba(0, 0, 0, 0.45);
            }
            .play-icon {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 45px;
                color: #ffffff;
                z-index: 2;
                opacity: 0.8;
                transition: all 0.3s ease;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            }
            .webinar-card:hover .play-icon {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1.15);
                color: #1e88e5; 
            }
            .webinar-info {
                padding: 20px;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .webinar-title {
                font-size: 16px;
                font-weight: 700;
                color: #222;
                margin: 0 0 12px 0;
                line-height: 1.4;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .webinar-date {
                font-size: 13px;
                color: #777;
                font-weight: 600;
                border-top: 1px solid #eee;
                padding-top: 10px;
                margin-top: auto;
            }
            .webinar-date i {
                color: #1e88e5;
                margin-right: 5px;
            }
        </style>
        
        <!-- Google Analytics & Facebook Pixel setup remains unchanged -->
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
                                <h1 style="text-transform: capitalize;">Past Webinars</h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Webinar</a></li>
                    <li>Past Webinars</li>
                </ul>

                <div class="container webinar-section">
                    <div class="row flex-row">
                        <?php if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { 
                                // Clean title text to avoid empty fields breaking layout
                                $webinar_title = !empty($row['title']) ? $row['title'] : "Webinar Session"; 
                        ?>
                                <!-- New Custom Grid Class applied here -->
                                <div class="custom-col-3">
                                    <div class="webinar-card">
                                        <!-- Video Link Wrapper -->
                                        <a data-fancybox href="https://www.youtube.com/embed/<?php echo $row['url']; ?>?autoplay=1&controls=0&showinfo=0&color=white&rel=0">
                                            <div class="webinar-thumb-wrapper">
                                                <div class="webinar-thumb" style="background-image: url('images/webinars/<?php echo $row['video_img']; ?>');"></div>
                                                <i class="fa fa-play-circle play-icon"></i>
                                            </div>
                                        </a>
                                        
                                        <!-- Text Data Output -->
                                        <div class="webinar-info">
                                            <h4 class="webinar-title" title="<?php echo $webinar_title; ?>">
                                                <?php echo $webinar_title; ?>
                                            </h4>
                                            <div class="webinar-date">
                                                <i class="fa fa-calendar"></i> <?php echo date("d M Y", strtotime($row['webinar_date'])); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                            }
                        } else { 
                        ?>
                            <!-- Empty State Fallback -->
                            <div class="col-md-12 text-center">
                                <h3 style="color: #555; padding: 40px 0;">No Past Webinars Found.</h3>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <?php include 'footer.php'; ?>
            </div>
        </div>

        <!-- JS Inclusions -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/jquery.fancybox-three.min.js'></script>
    </body>
</html>
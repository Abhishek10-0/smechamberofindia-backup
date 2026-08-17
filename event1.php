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
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YVPVYK16TG"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-YVPVYK16TG');
        </script>

        <!-- Custom Banner, Breadcrumb & Card Styles -->
        <style>
            /* Header Banner Fix */
            #banner {
                height: auto !important;
                clear: both;
                position: relative;
                z-index: 1;
            }
            div#inner-banner {
                background-color: #29688a;
                padding: 14px 0;
                display: flex;
                align-items: center;
            }
            #inner-banner h1 {
                font-size: 20px; 
                padding-left: 15px;
                color: #ffffff;
                text-transform: none;
                margin: 0;
                line-height: 1.2;
                font-family: 'Roboto Slab', serif;
            }

            .breadcrumb-section {
                clear: both;
                position: relative;
                z-index: 2;
                padding: 15px 0 5px 0;
            }
            ul.breadcrumb {
                margin: 0 !important;
                padding: 0 15px !important;
                list-style: none;
                background-color: transparent !important;
                border: none !important;
                box-shadow: none !important;
            }
            ul.breadcrumb li {
                display: inline-block;
                font-size: 13px;
                color: #666;
            }
            ul.breadcrumb li+li:before {
                padding: 0 8px;
                color: #999;
                content: "/\00a0";
            }
            ul.breadcrumb li a {
                color: #29688a;
                text-decoration: none;
            }
            ul.breadcrumb li a:hover {
                text-decoration: underline;
            }

            .blog-page {
                padding: 20px 0 40px 0;
            }
            .events-container {
                display: flex;
                flex-direction: column;
                gap: 25px;
                margin-top: 10px;
            }

            /* Card with Gradient Left Bar Fix */
            .event-card {
                background: #ffffff;
                border-radius: 14px;
                position: relative;
                overflow: hidden;  
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
                display: flex;
                align-items: center;
                padding: 25px 30px 25px 35px;
                gap: 30px;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

          
            .event-card::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 7px;
                background: linear-gradient(to top, #0b5f7d 0%, #1e88e5 100%);
            }

            .event-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            }
            .event-card-img {
                width: 320px;
                height: 180px;
                flex-shrink: 0;
                border-radius: 12px;
                overflow: hidden;
                background-color: #f0f0f0;
            }
            .event-card-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .event-card-content {
                flex-grow: 1;
            }
            .event-card-title {
                font-family: 'Roboto Slab', serif;
                font-size: 21px;
                font-weight: 700;
                color: #2b3e50;
                text-transform: uppercase;
                margin: 0 0 12px 0;
                line-height: 1.35;
                letter-spacing: 0.3px;
            }
            .event-card-date {
                font-size: 15px;
                font-weight: 700;
                color: #333333;
                margin-bottom: 6px;
            }
            .event-card-location {
                font-size: 15px;
                font-weight: 600;
                color: #555555;
                margin-bottom: 22px;
            }
            .btn-read-more {
    display: inline-block; 
    background: linear-gradient(to top, #0b5f7d 0%, #1e88e5 100%);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 0.6px;
    padding: 10px 32px;
    border-radius: 25px;
    text-decoration: none !important;
    transition: all 0.3s ease;
    border: none;
}

.btn-read-more:hover {
    /* Reverse gradient direction on hover */
    background: linear-gradient(to bottom, #0b5f7d 0%, #1e88e5 100%);
    /* Slight lift & glowing shadow effect */
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(30, 136, 229, 0.4);
}

            /* Mobile Responsiveness */
            @media (max-width: 768px) {
                .event-card {
                    flex-direction: column;
                    align-items: flex-start;
                    padding: 20px;
                    gap: 18px;
                }
                .event-card-img {
                    width: 100%;
                    height: 200px;
                }
                .event-card-title {
                    font-size: 18px;
                }
            }
        </style>
    </head>
    
    <body>
        <div id="wrapper">
            <?php include 'header.php'; ?>
            
            <div id="main">
                <!-- Blue Header Banner -->
                <div id="banner">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1>Forthcoming Events</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Breadcrumbs Section -->
                <div class="breadcrumb-section">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Forthcoming</li>
                        </ul>
                    </div>
                </div>

                <!-- Main Events Content -->
                <section class="blog-page">
                    <div class="container">
                        <div class="events-container">
                            <?php
                            // Fetch Forthcoming Events directly from sync_event
                            $syncStmt = $conn->prepare(
                                "SELECT * FROM sync_event WHERE status = 'PUBLISHED' AND start_date >= NOW() ORDER BY start_date ASC"
                            );
                            $syncStmt->execute();
                            $syncResult = $syncStmt->get_result();

                            if ($syncResult && $syncResult->num_rows > 0) {
                                while ($row = $syncResult->fetch_assoc()) {

                                    
                                    $imgSrc = "images/default-event.jpg"; 

                                    if (!empty($row['image'])) {
                                        $imgSrc = $row['image'];
                                    } else {
                                        $rawGallery = json_decode($row['gallery_images'] ?? '[]', true);
                                        if (is_array($rawGallery) && !empty($rawGallery)) {
                                            $first = $rawGallery[0];
                                            if (is_string($first) && trim($first) !== '') {
                                                $imgSrc = $first;
                                            } elseif (is_array($first)) {
                                                $imgSrc = $first['url'] ?? $first['src'] ?? $first['link'] ?? $imgSrc;
                                            }
                                        }
                                    }

                                    // Format Date & Time
                                    $timestamp = strtotime($row['start_date']);
                                    $formattedDate = date("d M Y", $timestamp);
                                    $formattedTime = date("h:i A", $timestamp);

                                    // Target Link
                                    $eventLink = "event-detail.php?id=" . $row['id'];
                            ?>
                                    <!-- Event Card -->
                                    <div class="event-card">
                                        <div class="event-card-img">
                                            <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                                        </div>
                                        
                                        <div class="event-card-content">
                                            <h2 class="event-card-title">
                                                <?php echo htmlspecialchars($row['name']); ?>
                                            </h2>
                                            
                                            <div class="event-card-date">
                                                <?php echo strtoupper($formattedDate); ?> | <?php echo $formattedTime; ?> to Onwards
                                            </div>
                                            
                                            <div class="event-card-location">
                                                <?php echo htmlspecialchars($row['location'] ?? 'India'); ?>
                                            </div>
                                            
                                            <a href="<?php echo $eventLink = "https://bookbizevent.com/events/" . $row['source_event_id'];; ?>" class="btn-read-more">READ MORE</a>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "
                                <div style='text-align:center; padding:50px 20px; background:#ffffff; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.05);'>
                                    <h3 style='color:#e53e3e;'>No Upcoming Events Found</h3>
                                    <p style='font-size:15px; color:#666;'>There are currently no forthcoming events scheduled. Please check back soon!</p>
                                </div>";
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <?php include 'footer.php'; ?>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
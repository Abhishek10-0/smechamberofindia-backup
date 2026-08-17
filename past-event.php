<?php
include 'config.php';


$year = isset($_GET['year']) ? $_GET['year'] : 2026;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gallery | Past Events | SME Chamber of India</title>
        <meta name='copyright' content='SME Chamber of India'>
        <meta property="og:title" content="SME Chamber of India" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://www.smechamberofindia.com/images/SME_LOGO.svg" />
        <meta property="og:url" content="https://www.smechamberofindia.com" />
        <meta property="og:site_name" content="SME Chamber of India" />
        <link rel="canonical" href="https://www.smechamberofindia.com/event" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/update-responsive.css" rel="stylesheet" type="text/css">
        <!-- CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <meta name="description" content="sme, sme india, sme chamber, small medium enterprise, sme chamber of india, sme events, sme finance, SME loan for new business, small business entrepreneurship, SME loan eligibility for new business, sme investment, small and medium sized enterprises, sme company,smes">        
                <meta name="keywords" content="SME membership India, MSME chamber membership, Business networking events India, SME conferences India, MSME training programs, Industry association membership,  Export business networking India">

        <!-- jQuery (ONLY ONCE) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- Fancybox -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/update-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        
    

        <style>
        body { font-family: Arial; }

        .span3 {
            width: 23%;
            float: left;
            margin: 1%;
        }

        img.rounded {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        span.icon {
            font-size: 28px;
        }
        .accordion-item {
            
            margin-bottom: 10px;
        }

        .accordion-header {
            border: 1px solid #ddd;
            background: #f5f5f5;
            padding: 12px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            border-left: 5px solid #ccc;
        }

        .accordion-header:hover {
            background: linear-gradient(135deg, #0b5f7d 0%, #1e88e5 100%);
            color:#fff;
            border-left: 5px solid rgba(0, 0, 0, 0.2);
        }

        .accordion-body {
            display: none;
            
        }

        /* important fix */
        .row::after {
            content: "";
            display: block;
            clear: both;
        }
        .container {
            max-width: 1170px;
            width: 100%;
            margin: 0 auto;
        }
        .head-topbar {
            background-color: #29688a;
        }
        strong.logo:before {
            position: absolute;
            left: 0;
            bottom: -20px;
            content: '';
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 20px 165px 0 165px;
            border-color: transparent transparent transparent;
            z-index: 9;
        }
        strong.logo:before, #nav li.active a:before, #nav li:hover>a:before, .widget-box-inner:hover .round a.inner:before, .timeline-project-box .holder .heading-area:before, .event-heading:before, #nav li:hover>a, .color-1:before, #nav li.active>a, .color-2:before, .color-3:before, .color-4:before, .color-5:before {
            border-top-color: white;
        }
        .head-topbar .left ul li a {
            font: 400 12px / 12px 'Roboto Slab', serif;
        }
        div#inner-banner {
            background-color: #29688a;
        }
        .accordion-header strong {
            text-transform: uppercase;
            font: 400 18px 'Roboto Slab';
        }
        #inner-banner h1 {
           
            font-size: 22px;
            padding-left: 20px;
        }
        ul.breadcrumb {
            margin: 0px;
        }


        @media (max-width: 767px) {
            .container {
                padding: 0 0px;
            }
            .span3 {
                width: 90%;
                float: left;
                margin: 1%;
            }
        }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>
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
            <div class="container">
                <b>
                <?php for ($y = 2026; $y >= 1993; $y--) { ?>
                    <a href="?year=<?php echo $y; ?>"
                       style="<?php if($year == $y) echo 'color:red; font-weight:bold;'; ?>">
                        <?php echo $y; ?>
                    </a> |
                <?php } ?>
                </b>

                <br><br>


                <?php
                $sql = "SELECT * FROM pastevent_gallery WHERE year_name='$year'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $images = explode(",", $row["yearwise_images"]);
                        $titles = explode("|", $row["pastevent_image_content"]);
                        $idy = $row['idy'];
                ?>

                <!-- 🔹 ACCORDION ITEM -->
                <div class="accordion-item">

                    <!-- HEADER -->
                    <div class="accordion-header" onclick="toggleAccordion('<?php echo $idy; ?>')">
                        <strong>
                            <?php echo $row['event-date']; ?> <?php echo $row['pastevent-name']; ?>
                        </strong>
                        <span class="icon" id="icon_<?php echo $idy; ?>">+</span>
                    </div>

                    <!-- BODY -->
                    <div id="acc_<?php echo $idy; ?>" class="accordion-body">

                         <div id="banner">
                            <div id="inner-banner"> 
                                <h1><?php echo $row["past-event-full-detail"]; ?></h1>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 5px;">
                            <?php foreach ($images as $i => $img) { 
                                if(trim($img) == '') continue;
                            ?>
                                <div class="span3">
                                    <a data-fancybox="gallery"
                                       data-caption="<?php echo $titles[$i] ?? ''; ?>"
                                       href="images/pastevent-big-images/<?php echo $img; ?>.JPG">

                                        <img class="rounded" src="https://smedatabank.com/pastevent-image/<?php echo $img; ?>.JPG" title="<?php echo $titles[$i] ?? ''; ?>">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                    </div>

                </div>

                <?php
                    }

                } else {
                    echo "
                    <div style='text-align:center; padding:40px;'>
                        <h3 style='color:red;'>404 Error - File or Directory Not Found</h3>
                        <p style='font-size:16px; font-weight:bold;'>
                        The resource you are looking for might have been removed or is temporarily unavailable.
                        </p>
                    </div>";
                }
                ?>

                </div>

        <?php include 'footer.php'; ?>

        <script>

        // ACCORDION LOGIC
        let currentOpen = null;

        function toggleAccordion(id) {

            let body = document.getElementById("acc_" + id);
            let icon = document.getElementById("icon_" + id);

            // close same
            if (currentOpen === id) {
                body.style.display = "none";
                icon.innerHTML = "+";
                currentOpen = null;
                return;
            }

            // close previous
            if (currentOpen !== null) {
                document.getElementById("acc_" + currentOpen).style.display = "none";
                document.getElementById("icon_" + currentOpen).innerHTML = "+";
            }

            currentOpen = id;

            body.style.display = "block";
            icon.innerHTML = "−";
        }

        </script>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
              
    </body>
</html>
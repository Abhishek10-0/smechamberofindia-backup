<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gallery</title>
        <meta name="Description" content="Gallery of SME Chamber of Inida, photos, Photos of Interactive Meetings">
        <meta name="Keywords" content="Gallery of SMEs Chamber of India ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/custom.css" rel="stylesheet" type="text/css">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">

        <link href="css/color.css" rel="stylesheet" type="text/css">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">

        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
        <style type="text/css">
            a.fancybox img {
                border: none;
                box-shadow: 0 1px 7px rgba(0,0,0,0.6);
                -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
            } 
            a.fancybox:hover img {
                position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
            }
        </style>
        
        
        
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

        

    </head>
    <body>
        <div id="wrapper">

            <?php include 'header.php'; ?>

            <div id="main">

                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: capitalize;">Gallery </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                </ul>

                <section class="about-page">
                    <div style="padding-left: 3%">

                        <div class="span3">
                            <img class="fancybox" src="images/PhotoGallery/Small/pmindias.jpg" data-big="images/PhotoGallery/Big/pmindias.jpg" title="Mr. Chandrakant Salunkhe - Founder & President, SME Chamber of India with Mr. Narendra Modi - Hon'ble Prime Minister of India during Interactive Meeting -File Photo">
                        </div>
                        <div class="span3">
                            <p>
                                <img class="fancybox" src="images/PhotoGallery/Small/Gov.jpg" data-big="images/PhotoGallery/Big/Gov.jpg" title="Shri Chandrakant Salunkhe – Founder & President, SME Chamber of India had meeting with the newly appointed Governor of Maharashtra H.E. Shri Vidyasagar Rao on 11th September, 2014 at Raj Bhavan, Mumbai. Shri Salunkhe apprised the activities of SME Chamber of India and various issues and problems of Industry and SME Sector of Maharashtra. Hon’ble Governor was kind enough to suggest strategies for strengthening SMEs for Better Growth as well advised various activities to be organised by the Chamber in future for providing special guidance and handholding to young entrepreneurs to achieve success in their ventures. Hon’ble Governor has assured to support the activities of the Chamber for the growth of Industry and SMEs as well as to look into specific issues and problems to be recommended to State Government and concerned authorities for effective redressal for empowerment of SMEs and Industrial Sector in the State.">
                            </p><br>
                        </div>
                        <div class="span3">
                            <p>
                                <img class="fancybox" src="images/PhotoGallery/Small/20141111_122504.jpg" data-big="images/PhotoGallery/Big/20141111_122504.jpg" title="Shri Chandrakant Salunkhe - Founder & President, Small & Medium Business Development Chamber of India with Shri Devendra Fadnavis - Hon'ble Chief Minister of Maharashtra during the Interactive Meeting on 11th November 2014 at Mumbai">
                            </p><br>
                        </div>
                        <div class="span3">
                            <p>
                                <img class="fancybox" src="images/PhotoGallery/Small/DG4_5622.jpg" data-big="images/PhotoGallery/Big/DG4_5622.jpg" title="Shri Chandrakant Salunkhe - Founder & President, Small & Medium Business Development Chamber of India with Shri Devendra Fadnavis - Hon'ble Chief Minister of Maharashtra during the Interactive Meeting on 11th November 2014 at Mumbai">
                            </p><br>
                        </div>


                        <?php include 'config.php'; ?>  
                        <?php
//$year = $_GET['year'];
                        // $sql1 = "SELECT * FROM `main_gallery`";
                        $sql1 = "SELECT * from main_gallery ORDER BY idg DESC";
                        $result1 = $conn->query($sql1);
                        if ($result1->num_rows > 0) {
// output data of each row
                            while ($row1 = $result1->fetch_assoc()) {
                                ?>
                                <div class="span3">
                                    <p>
                                        <img class="fancybox" src="images/PhotoGallery/Small/<?php echo $row1["gallery-image"]; ?>.jpg" data-big="images/PhotoGallery/Big/<?php echo $row1["gallery-image"]; ?>.jpg" title="<?php echo $row1["gallery_image_content"] ?>">
                                    </p><br>
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


        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <!--<script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>

        <script src="js/custom.js" type="text/javascript"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
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

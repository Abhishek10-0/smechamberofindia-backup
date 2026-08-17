<!DOCTYPE HTML>
<html>
 
   <head>
        
<meta charset="utf-8">
      
  <title>SME-NEWS</title>
      
  <meta name="keywords" content="">
 
       <meta name="description" content="">
 
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
        <script src="js/html5.js" type="text/javascript"></script>
    
    <script type="text/javascript">
 
           function loadXMLDoc() {
       
         var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        // change content from div
                        document.getElementById("side_latest").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "sidebar_latest_news.php", true);
                xmlhttp.send();
            }

            // first page load
            loadXMLDoc();
            //setInterval(loadXMLDoc, 2000);
        </script>
        <script type="text/javascript">
            function loadXMLDoc() {
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        // change content from div
                        document.getElementById("sidebar_event").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "sidebar_upcoming_event.php", true);
                xmlhttp.send();
            }

            // first page load
            loadXMLDoc();
            //setInterval(loadXMLDoc, 2000);
        </script>

         <style>
         .blog-box-1 {
            text-align: justify;
        }
        .blog-box-1 .text p {
            font: 400 14px / 22px 'Open Sans', sans-serif;
            color: #000;
            margin: 0 0 15px 0;
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


   <div id="wrapper">
        <?php include 'header.php'; ?>
        <div id="main">
            <div id="banner" style="height: 75px;">
                <div id="inner-banner">
                    <div class="container">
                        <div class="row-fluid">
                            <h1>News Details</h1>
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
                        <div class="span9">
                            <div class="blog-content">
                                <div class="blog-box-1">
                                    <?php include 'config.php'; ?>  
                                    <?php
                                    $id = $_GET["id"];
                                    $sql = "SELECT * from news_sme where idn=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row

                                        while ($row = $result->fetch_assoc()) {
                                            /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
                                            ?>
                                            <h4 class="title"><u><?php echo $row["news_headline"] ?></u></h4>
                                            <div class="frame">
                                                <img src="images/news-big/<?php echo $row["news-image"]; ?>.jpg" >
                                            </div>
                                            <div class="bottom-row">
                                                <div class="left"> <a class="title"><i class="fa fa-calendar"></i><?php echo $row["news_date"] ?></a> 
                                                    <a class="title"><i class="fa fa-newspaper-o"></i><?php echo $row["news_source"] ?></a> 
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p><?php echo $row["news_full_description"] ?></p>
                                                <a href="read_more_news.php?id=<?php echo $row["ids"] ?>" class="readmore"></a> 

                                                <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="span3">
                            <aside>
                                <div id="sidebar">
                                    <form action="#" class="sidebar-form">
                                       
                                        <div class="sidebar-member"> 
                                            <a href="membership.php" class="member-icon"><i class="fa fa-user"></i></a> 
                                            <a href="membership.php" class="member-text curl-top-left">Become Our Member</a> 
                                        </div>
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
    <script type="text/javascript" src="js/styleswitch.js"></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
</body>

</html>

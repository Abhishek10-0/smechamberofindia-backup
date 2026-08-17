<!-- with using Ajax Coding page show-data.php -->

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
   <img height="1" width="1" style="display:none"
   src="https://www.facebook.com/tr?id=784564702179617&ev=PageView&noscript=1"/>
</noscript>
<style type="text/css">
    @media (min-width: 1200px) {
    .span3 {
        width: 270px;
        padding-bottom: 15px;
    }
}
img.rounded {
    height: 192px;
    width: 270px;    
}

</style>
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
                                 <section class="about-page">                                    
                                    <div id="result">                                                
                                    </div>
                                 </section>
                                 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>

<b>
     <b><a href="2026"> 2026 </a> | <a href="2025">2025</a> | <a href="2024">2024</a> | 2023 | 2022</b>
        <?php include 'config.php'; ?>  
        <?php
            //echo $year = $_GET['year'];
            $sql = "SELECT * FROM `pastevent_gallery` where year_name='2026'" ;
            //echo $sql;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
                while ($row = $result->fetch_assoc()) {

        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>
        <div class="accordion-group">
            <div class="accordion-heading"> 
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                    <strong onclick="test(<?php echo $row['idy']; ?>)"><?php echo $row['event-date']; ?>  <?php echo $row['pastevent-name']; ?></strong>
                    <span><i class="fa fa-plus" onclick="test(<?php echo $row['idy']; ?>)"></i></span></a>
                     <div id="<?php echo $row['idy']; ?>" hidden="false">
                        <?php
                           $idy = $row['idy'];
                        ?>
                        <div id="main">
                            <div id="banner">
                                <div id="inner-banner">
                                    <div class="container">
                                        <div class="row-fluid">
                                            <h1>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["past-event-full-detail"] ?> </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="about-page">
                                <div>   
                                    <?php
                                    $sql1 = "SELECT * FROM `pastevent_gallery` where year_name ='2026' and idy='$idy'";
                                    $result1 = $conn->query($sql1);
                                    if ($result1->num_rows > 0) {

                                        while ($row1 = $result1->fetch_assoc()) {
                                            /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
                                            $images = explode(",", $row["yearwise_images"]);
                                            $titles = explode("|", $row["pastevent_image_content"]);
                                            for ($j = 0; $j < sizeof($images); $j++) {
                                                ?>
                                                <div class="span3 column">
                            
                                                    <a data-caption="<?php echo $titles[$j]; ?>"
                                                      data-fancybox="gallery"
                                                       href="images/pastevent-big-images/<?php echo $images[$j]; ?>.JPG"
                                                          >
                                                       <img class="rounded" src="https://smedatabank.com/pastevent-image/<?php echo $images[$j]; ?>.JPG" />
                                                    </a>
                                                </div>
                                                <?php
                                            }    //  for loop will close here 
                                        } //  while loop will close here 
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                }
            } else {
                echo "<h3 style='color:red; text-align: center;'>404 Error - File or Directory Not Found </h3> 
                <p style='color: black; font-size: 1.2em; font-weight: bold; text-align: center;'>
                The resource you are looking for might have been removed or is temporarily unavailable.</p>";
            }
        ?>
    </div>
    
    <script lang="javascript">
    document.getElementById("2026").hidden = false;   
    </script>
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

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
        <style>       
            #mainCarousel {
              width: 600px;
              margin: 0 auto 1rem auto;

              --carousel-button-color: #170724;
              --carousel-button-bg: #fff;
              --carousel-button-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%),
                0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);

              --carousel-button-svg-width: 20px;
              --carousel-button-svg-height: 20px;
              --carousel-button-svg-stroke-width: 2.5;
            }

            #mainCarousel .carousel__slide {
              width: 100%;
              padding: 0;
            }

            #mainCarousel .carousel__button.is-prev {
              left: -1.5rem;
            }

            #mainCarousel .carousel__button.is-next {
              right: -1.5rem;
            }

            #mainCarousel .carousel__button:focus {
              outline: none;
              box-shadow: 0 0 0 4px #A78BFA;
            }

            #thumbCarousel .carousel__slide {
              opacity: 0.5;
              padding: 0;
              margin: 0.25rem;
              width: 96px;
              height: 64px;
            }

            #thumbCarousel .carousel__slide img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              border-radius: 4px;
            }

            #thumbCarousel .carousel__slide.is-nav-selected {
              opacity: 1;
            }
            .col-lg-4.column img {
                width: 100%;
                height: 220px;
                margin-bottom: 20px;
            }
            header.header-section {
                position: inherit;
            }
            footer.footer-section.section1 {
                top: 0px;
            }
        </style>
        <script>
                // Initialise Carousel
        const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), {
          Dots: false,
        });

        // Thumbnails
        const thumbCarousel = new Carousel(document.querySelector("#thumbCarousel"), {
          Sync: {
            target: mainCarousel,
            friction: 0,
          },
          Dots: false,
          Navigation: false,
          center: true,
          slidesPerPage: 1,
          infinite: false,
        });

        // Customize Fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
          Carousel: {
            on: {
              change: (that) => {
                mainCarousel.slideTo(mainCarousel.findPageForSlide(that.page), {
                  friction: 0,
                });
              },
            },
          },
        });
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
        <!-- <script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <!-- <script src="js/jquery.countdown.js"></script>-->
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script> 
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script type="module">
          import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />  
    </body>
</html>

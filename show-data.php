<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<b>
    <?php
        for ($year = 2026; $year >= 1993; $year--) {
    ?>
    <a href="javascript:retrive_details(<?php echo $year; ?>,1994,2026)" title="<?php echo $year; ?>">
    <?php echo $year; ?></a>&nbsp;|
        <?php
            }
        ?>
        </b><br><br>
        <?php
            for ($year = 2026; $year >= 1993; $year--) {
        ?>
        <div id="<?php echo $year; ?>" hidden="true" >
        <?php include 'config.php'; ?>  
        <?php
            //echo $year = $_GET['year'];
            $sql = "SELECT * FROM `pastevent_gallery` where year_name='$year'" ;
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
                                    $sql1 = "SELECT * FROM `pastevent_gallery` where year_name ='$year' and idy='$idy'";
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
    <?php
        }
    ?>
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
                
    
                    
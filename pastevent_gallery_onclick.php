<!DOCTYPE HTML>
<?php include 'config.php'; ?>  
<html>
    <head>
        <meta charset="utf-8">
        <title>SMEs Chamber of India Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Global site tag (gtag.js) - Google Analytics -->
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
                                    <div class="span3">
                                        <p>
											<?php
												//$filename=$images[$j].".JPG";
												//$filename="missfeb1.jpg";
												//if(file_exists('https://www.smechamberofindia.com/images/pastevent-images/'.$filename)) 
												//{
													//echo "hiii";
											?>
											<img class="fancybox" src="https://smedatabank.com/pastevent-image/<?php echo $images[$j]; ?>.JPG"
											data-big="images/pastevent-big-images/<?php echo $images[$j]; ?>.JPG" 
											title="<?php echo $titles[$j]; ?>">
											<?PHP
												/*}
												//ELSE
												//{
													//echo "byyiii";
											?>
													<img class="fancybox" src="images/pastevent-images/<?php echo $images[$j]; ?>.jpg" data-big="images/pastevent-big-images/<?php echo $images[$j]; ?>.jpg" title="<?php echo $titles[$j]; ?>">
											<?php
												//}*/
											?>
                                            
                                        </p><br>
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
        
  

    </body>
</html>

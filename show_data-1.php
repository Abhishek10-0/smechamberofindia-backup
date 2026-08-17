<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
        <style type="text/css">
            a.fancybox img {
                border: none;
                box-shadow: 0 1px 7px rgba(0,0,0,0.6);
                -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); 
                -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; 
                -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
            } 
            a.fancybox:hover img {
                position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); 
                -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
            }
            #fancybox-outer{height:auto !important;}
            .span3 img {
    height: 220px;
    width: 270px;
}
@media (min-width: 1200px){
.span3 {
    width: 270px;
    height: 234px;
}
}

        </style>
<b>
            <?php
            for ($year = 2025; $year >= 1993; $year--) {
            ?>
            <a href="javascript:retrive_details(<?php echo $year; ?>,1994,2025)" title="<?php echo $year; ?>">
            <?php echo $year; ?></a>&nbsp;|

            <?php
            }
            ?>
            </b><br><br>

            <?php
            for ($year = 2025; $year >= 1993; $year--) {
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
document.getElementById("2025").hidden = false;   
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
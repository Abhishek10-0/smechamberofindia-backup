<!DOCTYPE HTML>
<?php include 'config.php'; 
session_start();
?>  
<html>
    <head>
        <meta charset="utf-8">
        <title>SMEs Chamber of India Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
       <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
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
                                <h1>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["past-event-full-detail"] ?> 
                                 </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="about-page">
                    <?php 
                        $_SESSION['year'] = $row['year_name']; 
                        $_SESSION['idy'] = $row['idy'];

                     ?>
                    <div id="result">   
                        
                    </div>

                </section>

                <script type="text/javascript">
                  $(document).ready(function(){
                  showdata();
                                        
                  });

                  function showdata(){
                     $.ajax({
                     url: 'show-data.php',
                     method: 'post',
                     success: function(result)
                     {
                        $("#result").html(result);
                     }
                     });
                  } 
               </script>

            </div>
        </div>
    </body>
</html>

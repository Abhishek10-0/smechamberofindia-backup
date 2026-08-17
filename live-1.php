<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Live Webinar | Chamber SME Chamber of India </title>
        <meta name="Description" content="SME Chamber of India a premier national Chamber has been working for the development of SMEs from manufacturing, service sectors and allied industrial sectors for the last 25 years. The mission of the Chamber is to integrate SMEs and stakeholders to accomplish the objectives of the Chamber as well as strengthening SMEs to achieve targeted economic growth of India. The Chamber has been on the forefront for policy implementation and policy change and supporting SMEs to avail opportunities in the era of Make-In-India. 
              The Chamber organises various activities to impart knowledge, skills and provides a platform for promotion of products and services, enhancement of contacts for business growth and expansion, convert new business concepts & ideas into profitable business ventures, utilisation of unique marketing and branding facilities, advanced technology for improvement of capabilities & productivity, quality assurance, utilisation of benefits and advantages of various government departments for domestic as well as export promotion. The Chamber also channelises bank finance, export finance, venture capital, private equity, external commercial borrowings and investment for enhancement of business activities. 
              The Chamber has been providing unique support to Young & Women entrepreneurs and Start – Ups to connect with manufacturing industries, SME sector, government procurement , MNCs and Corporates.">
        <meta name="Keywords" content="About SME Chamber of India, Introduction of SME Chamber of India ,About Chamber,SME Chamber of India a premier national Chamber has been working for the development of SMEs from manufacturing, service sectors and allied industrial sectors">

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
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="js/html5.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=784564702179617&ev=PageView&noscript=1"
/></noscript>

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
                                <h1 style="text-transform: capitalize;">Live Webinar</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'config.php'; ?>  
                <section class="about-page">
                    <div class="container">
					
					<?php
//$year = $_GET['year'];
$sql = "SELECT * FROM `pastevent_gallery` ORDER BY year_name DESC , idy ASC LIMIT 1" ;
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

    while ($row = $result->fetch_assoc()) {

        /* For loop to generate the section under Popular posts $row["detail"] $row["date"]  */
        ?>
						<h2 style="padding: 30px;text-align: center;"><?php echo $row['pastevent-name']; ?> <?php echo $row['event-date']; ?>  </h2>
						
						<?php
	 }
} else {
    echo "<h3 style='color:red; text-align: center;'>404 Error - File or Directory Not Found </h3> 
	<p style='color: black; font-size: 1.2em; font-weight: bold; text-align: center;'>
	The resource you are looking for might have been removed or is temporarily unavailable.</p>";
}
	?>
                         
                       <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
   <iframe width="100%" height="650" src="https://youtube.com/embed/wUIZIy9e0WE"></iframe>
   <iframe width="100%" height="650" src="https://youtube.com/embed/Kw18sQdvqqo"></iframe>
   <iframe width="100%" height="650" src="https://youtube.com/embed/mMolIalPbRU"></iframe>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '650',
          width: '100%',
          videoId: 'O1ZEirsO4s4',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
                    </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
<!--        <script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.plugin.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery-filterable.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>

</html>

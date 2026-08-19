<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/swc.js" type="text/javascript"></script>

<!-- Rotates the images inside #imgGallary every 4s -->
<script>
(function() {
    var imgLen = document.getElementById('imgGallary');
    var images = imgLen.getElementsByTagName('img');
    var counter = 1;

    if (counter <= images.length) {
        setInterval(function() {
            images[0].src = images[counter].src;
            console.log(images[counter].src);
            counter++;

            if (counter === images.length) {
                counter = 1;
            }
        }, 4000);
    }
})();
</script>

<!-- Popup Script: shows the .popup1 ad modal on page load -->
<script type="text/javascript">
window.addEventListener("load", function() {
    setTimeout(
        function open(event) {
            document.querySelector(".popup1").style.display = "block";
        },
        0
    )
});
document.querySelector("#close1").addEventListener("click", function() {
    document.querySelector(".popup1").style.display = "none";
});
</script>

<!-- Cycles the .mySlides1 ad slides inside the popup every 3s -->
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides1");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

<!-- LinkedIn Insight Tag -->
<script type="text/javascript">
_linkedin_partner_id = "7539980";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
(function(l) {
    if (!l) {
        window.lintrk = function(a, b) {
            window.lintrk.q.push([a, b])
        };
        window.lintrk.q = []
    }
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";
    b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
})(window.lintrk);
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=7539980&fmt=gif" />
</noscript>

<?php include __DIR__ . '/policy-popup.php'; ?>
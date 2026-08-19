<style type="text/css">
a.bx-prev { display: none; }
a.bx-next { display: none; }
.Support .bx-pager-item { display: none !important; }
.member1 .bx-wrapper .bx-pager,
.bx-wrapper .bx-controls-auto { bottom: -70px; }
.Support ul li { border: 1px solid #ccc; }
section#forthcoming .bx-wrapper { padding-left: 27.5%; }

@media (max-width: 480px) {
    .col-md-6.Support { width: 100% !important; }
}

.col-md-12.Support li { width: 366px !important; height: 183px !important; }
.col-md-12.Support .bx-viewport { height: 183px !important; }
.col-md-12.Support1 .bx-viewport { height: 281px !important; }
.Support1 ul li { width: 500px !important; }
.col-md-12.Support1 .bx-wrapper { max-width: 800px !important; margin-bottom: 0px; }
.bx-pager, .bx-pager-item { display: none !important; }
</style>

<!-- Pop up Style-->
<style type="text/css">
#overlay, #overlay1 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    z-index: 100;
    display: none;
}

.cnt223 a { text-decoration: none; }

.popup1 {
    margin: 0 auto;
    display: none;
    position: fixed;
    z-index: 101;
    text-align: center;
    height: 800px;
    overflow: auto;
    left: 33%;
    top: 5%;
}

.popup1 .cnt223 {
    min-width: 500px;
    width: 500px;
    min-height: 150px;
    margin-top: 1%;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
    display: inline-block;
}

.cnt223 p {
    clear: both;
    color: #555555;
    font-size: 20px;
    font-family: sans-serif;
}

.cnt223 p a { color: #d91900; font-weight: bold; }

.cnt223 .x {
    float: right;
    height: 35px;
    left: 22px;
    position: relative;
    top: -25px;
    width: 34px;
}

.cnt223 .x:hover { cursor: pointer; }

.form-group>input[type="text"] {
    padding: 10px;
    font-size: 18px;
    width: 94%;
}

form { margin: 25px 0 10px; }
button.close { position: absolute; font-size: 35px; }
a.bx-next { display: none; }
a.bx-prev { display: none; }
button.btn { font-size: 18px; }

@media (max-width: 767px) {
    div#inner1 { margin-bottom: 20px; width: 100% !important; }
    .popup1 { left: 5%; }
    .popup1 .cnt223 { min-width: 300px; width: 300px; }
}

body { font-family: Verdana, sans-serif; }

.mySlides1 { display: none; }
.mySlides1 img { vertical-align: middle; }

/* Slideshow container */
.slideshow-container1 {
    max-width: 1000px;
    position: relative;
    margin: auto;
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* The dots/bullets/indicators */
.dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    display: none;
}

.active { background-color: #717171; }

/* Fading animation */
.fade1 { animation-name: fade; animation-duration: 1.5s; }

@keyframes fade1 {
    from { opacity: .4 }
    to { opacity: 1 }
}

.box-button { margin-bottom: 10px; }

.home-premium-title-wrapper { text-align: center; }

.home-premium-title {
    display: inline-block;
    background: linear-gradient(135deg, #0b5f7d 0%, #1e88e5 100%);
    color: #ffffff;
    padding: 8px 20px;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(11, 95, 125, 0.3);
    margin: 0;
}
</style>

<script type='text/javascript'>
$(function() {
    setTimeout(function() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup1').show();
        $('.close1').click(function() {
            $('.popup1').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });

        $('.x').click(function() {
            $('.popup1').hide();
            overlay.appendTo(document.body).remove();
            return false;
        });
    });
}, 0);
</script>
<!-- end pop up-->
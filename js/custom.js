/* global google */

jQuery(document).ready(function($) {
    "use strict";
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });
    if ($('.slide-out-div').length) {
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',
            pathToTabImage: 'images/gear.png',
            imageHeight: '40px',
            imageWidth: '40px',
            tabLocation: 'left',
            speed: 300,
            action: 'click',
            topPos: '200px',
            fixedPosition: false
        });
    }
    $('.navigation-area a.search').click(function() {
        if ($(this).attr('id') === 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-300px'
            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '53px'
            });
        }
    });
    $('.head-topbar a.search').click(function() {
        if ($(this).attr('id') === 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-100px'
            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '41px'
            });
        }
    });
    $('.header-nav').click(function() {
        if ($(this).attr('id') === 'bottom-active-btn') {
            $(this).attr('id', 'no-bottom-active-btn');
            $('.footer-menu').animate({
                left: '416px'
            });
        } else {
            $(this).attr('id', 'bottom-active-btn');
            $('.footer-menu').animate({
                left: '0px'
            });
        }
    });
    if ($('.defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }
    if ($('#upcoming-news-slider').length) {
        $('#upcoming-news-slider').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#twitter-fade').length) {
        $('#twitter-fade').bxSlider({
            mode: 'fade',
            captions: true,
            auto: true
        });
    }
    if ($('#home-banner').length) {
        $('#home-banner').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#blog-post').length) {
        $('#blog-post').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#project-detail').length) {
        $('#project-detail').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#timeline-project').length) {
        $('#timeline-project').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#testimonials').length) {
        $('#testimonials').bxSlider({
            infiniteLoop: false,
            hideControlOnEnd: true,
            default: 4000
        });
    }
    if ($('#testimonials-2').length) {
        $('#testimonials-2').bxSlider({
            mode: 'fade',
            auto: true,
            captions: true
        });
    }
    if ($('#flexiselDemo1').length) {
        $("#flexiselDemo1").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });
    }
    if ($('.accordion-body').length) {
        $('.accordion-body').on('show', function(e) {
            $(e.currentTarget).parent().find('.accordion-heading').addClass('active');
        });
        $('.accordion-body').on('hide', function(e) {
            $(e.currentTarget).parent().find('.accordion-heading').removeClass('active');
        });
    }
    if ($('#portfolio-list').length) {
        var filter_container = jQuery('#portfolio-list');
        filter_container.children().css('position', 'absolute');
        filter_container.masonry({
            singleMode: true,
            itemSelector: '.portfolio-item:not(.hide)',
            animate: true,
            animationOptions: {
                duration: 800,
                queue: false
            }
        });
        jQuery(window).resize(function() {
            var temp_width = filter_container.children().filter(':first').width();
            filter_container.masonry({
                columnWidth: temp_width,
                singleMode: true,
                itemSelector: '.portfolio-item:not(.hide)',
                animate: true,
                animationOptions: {
                    duration: 800,
                    queue: false
                }
            });
        });
        jQuery('ul#portfolio-filter a').click(function(e) {
            jQuery(this).addClass("active");
            jQuery(this).parents("li").siblings().children("a").removeClass("active");
            e.preventDefault();
            var select_filter = jQuery(this).attr('data-value');
            if (select_filter === "All" || jQuery(this).parent().index() === 0) {
                filter_container.children().each(function() {
                    if (jQuery(this).hasClass('hide')) {
                        jQuery(this).removeClass('hide');
                        jQuery(this).fadeIn();
                    }
                });
            } else {
                filter_container.children().not('.' + select_filter).each(function() {
                    if (!jQuery(this).hasClass('hide')) {
                        jQuery(this).addClass('hide');
                        jQuery(this).fadeOut();
                    }
                });
                filter_container.children('.' + select_filter).each(function() {
                    if (jQuery(this).hasClass('hide')) {
                        jQuery(this).removeClass('hide');
                        jQuery(this).fadeIn();
                    }
                });
            }
            filter_container.masonry();
        });
    }
    if ($('#myTab').length) {
        $('#myTab a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    }
    if ($('#map_contact_1').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#ba131a'
                }, {
                    saturation: -30
                }, {
                    lightness: 10
                }]
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_2').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_2'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_3').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_3'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_4').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#ba131a'
                }, {
                    saturation: -30
                }, {
                    lightness: 10
                }]
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_4'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_5').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_5'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_6').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#00FF55'
                }, {
                    saturation: -30
                }, {
                    lightness: 10
                }]
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_6'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_7').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_7'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_8').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                stylers: [{
                    hue: '#0073FF'
                }, {
                    saturation: -30
                }, {
                    lightness: 10
                }]
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_8'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_9').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_9'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_10').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_10'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('#map_contact_01').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10
            }]
        };
        map = new google.maps.Map(document.getElementById('map_contact_01'), myOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }
    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }
    if ($('#container').length) {
        $(window).load(function() {
            $('#container').BlocksIt({
                numOfCol: 4,
                offsetX: 15,
                offsetY: 15
            });
        });
        var currentWidth = 1170;
        $(window).resize(function() {
            var winWidth = $(window).width();
            var conWidth;
            if (winWidth < 660) {
                conWidth = 440;
                col = 2;
            } else if (winWidth < 880) {
                conWidth = 660;
                col = 3;
            } else if (winWidth < 1100) {
                conWidth = 880;
                col = 4;
            } else {
                conWidth = 1170;
                col = 5;
            }
            if (conWidth !== currentWidth) {
                currentWidth = conWidth;
                $('#container').width(conWidth);
                $('#container').BlocksIt({
                    numOfCol: col,
                    offsetX: 8,
                    offsetY: 8
                });
            }
        });
    }
    if ($('#causes-banner').length) {
        $('#causes-banner').bxSlider({
            infiniteLoop: true,
            auto: true,
            hideControlOnEnd: true
        });
    }
    if ($('#donation-slider').length) {
        $('#donation-slider').bxSlider({
            infiniteLoop: true,
            mode: 'fade',
            auto: true,
            hideControlOnEnd: true
        });
    }
    if ($('.blog-slider').length) {
        $('.blog-slider').bxSlider({
            auto: true,
            minSlides: 2,
            maxSlides: 2,
            slideWidth: 470,
            slideMargin: 30
        });
    }
    if ($('.partners-slider').length) {
        $('.partners-slider').bxSlider({
            auto: true,
            minSlides: 2,
            maxSlides: 6,
            slideWidth: 168,
            slideMargin: 30
        });
    }
    if ($('.target-project').length) {
        $('.target-project').bxSlider({
            auto: true,
            minSlides: 2,
            maxSlides: 3,
            slideWidth: 370,
            slideMargin: 30
        });
    }
});

jQuery(document).ready(function() {
 
var offset = 250;
 
var duration = 300;
 
jQuery(window).scroll(function() {
 
if (jQuery(this).scrollTop() > offset) {
 
jQuery('.back-to-top').fadeIn(duration);
 
} else {
 
jQuery('.back-to-top').fadeOut(duration);
 
}
 
});
 
 
 
jQuery('.back-to-top').click(function(event) {
 
event.preventDefault();
 
jQuery('html, body').animate({scrollTop: 0}, duration);
 
return false;
 
});
 
});
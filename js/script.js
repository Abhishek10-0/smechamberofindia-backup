$(document).ready(function() {
    $(".portfolio a").hover(function() {
        $(this).children("img").animate({
            opacity: 0.75
        }, "fast");
    }, function() {
        $(this).children("img").animate({
            opacity: 1.0
        }, "slow");
    });
    $(".portfolio a[data-rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_square',
        autoplay_slideshow: false,
        overlay_gallery: false,
        show_title: false
    });
    var $portfolioClone = $(".portfolio").clone();
    $(".filter a").click(function(e) {
        $(".filter li").removeClass("current");
        var $filterClass = $(this).parent().attr("class");
        if ($filterClass === "all") {
            var $filteredPortfolio = $portfolioClone.find("li");
        } else {
            var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
        }
        $(".portfolio").quicksand($filteredPortfolio, {
            duration: 800,
            easing: 'easeInOutQuad'
        }, function() {
            $(".portfolio a").hover(function() {
                $(this).children("img").animate({
                    opacity: 0.75
                }, "fast");
            }, function() {
                $(this).children("img").animate({
                    opacity: 1.0
                }, "slow");
            });
            $(".portfolio a[data-rel^='prettyPhoto']").prettyPhoto({
                theme: 'light_square',
                autoplay_slideshow: false,
                overlay_gallery: false,
                show_title: false
            });
        });
        $(this).parent().addClass("current");
        e.preventDefault();
    });
});
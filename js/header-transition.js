$j = jQuery.noConflict();

$j(window).on("load scroll", function() {
    $j(".site-nav").toggleClass("site-nav--transparent", $j(window).scrollTop() === 0 && $j(document).width() > 768);
});

$j(window).on("resize", function() {
    $j(".site-nav").toggleClass("site-nav--transparent", $j(window).scrollTop() === 0 && $j(document).width() > 768);
});
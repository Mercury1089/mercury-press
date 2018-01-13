$(window).on("load scroll", function() {
    $(".site-nav").toggleClass("site-nav--transparent", $(window).scrollTop() === 0 && $(document).width() > 768);
});

$(window).on("resize", function() {
    $(".site-nav").toggleClass("site-nav--transparent", $(window).scrollTop() === 0 && $(document).width() > 768);
});
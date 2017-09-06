$(window).on("load scroll", function() {
    $(".site-nav").toggleClass("site-nav--transparent", $(window).scrollTop() === 0);
});
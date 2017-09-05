$(window).on("scroll", function() {
    if ($(window).scrollTop() == 0)
        $(".site-header").removeClass("opaque");
    else if ($(window).scrollTop() != 0)
        $(".site-header").addClass("opaque");
});
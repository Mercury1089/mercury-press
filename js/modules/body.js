$j = jQuery.noConflict();

window.onload = function() {
    // Add any selector that might have a slow load time.
    // The only ones I can say for certain 
    // are the home page and the gallery

    $j("body.home").addClass("loaded");
    $j("body.page-template-default").addClass("loaded"); 
};

$j('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        // Figure out element to scroll to
        var target = $j(this.hash);
        target = target.length ? target : $j('[name=' + this.hash.slice(1) + ']');
        
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            
            // Header offset
            var offset = 96 + parseInt( $j("html").css("marginTop") );
            
            console.log(offset);
            
            $j('html, body').scrollTo(target, {
                duration: 1000,
                offset: -offset,
                easing: "easeInOutExpo",
                axis: 'y',
                interrupt: true
            });
        }
    }
});
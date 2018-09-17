$j = jQuery.noConflict();

window.onload = function() {
    // Add any selector that might have a slow load time.
    // The only ones I can say for certain 
    // are the home page and the gallery

    $j(".loadable").addClass("loadable--loaded");
    $j('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(scrollToID);
};

function scrollToID(event) {
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
                duration: 200,
                offset: -offset,
                easing: "easeOutCirc",
                axis: 'y',
                interrupt: true
            });
        }
    }
}
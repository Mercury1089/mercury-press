$(function () {
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                
                // Header offset
                var offset = 96 + parseInt( $("html").css("marginTop") );
                
                console.log(offset);
                
                $('html, body').scrollTo(target, {
                    duration: 1000,
                    offset: -offset,
                    easing: "easeInOutExpo",
                    axis: 'y',
                    interrupt: true
                });
            }
        }
    });
});
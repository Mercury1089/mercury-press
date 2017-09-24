$(function() {
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Calculate offset based on sticky header
                var offset = 96;
                
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                
                $('html, body').scrollTo(target, {
                    duration: 1000,
                    offset: -offset,
                    easing: "easeInOutExpo",
                    axis: 'y', 
                    interrupt: true
                });
            }
        }
    })
});
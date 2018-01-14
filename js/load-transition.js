$j = jQuery.noConflict();

window.onload = function() {
    // Add any selector that might have a slow load time.
    // The only ones I can say for certain 
    // are the home page and the gallery

    $j("body.home").addClass("loaded");
    $j("body.page-template-default").addClass("loaded"); 
};
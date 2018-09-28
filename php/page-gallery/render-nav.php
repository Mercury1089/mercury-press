<?php
// Render the navigation bar for the sections.
function render_nav() {
    $classes = implode(" ", array(
        "gallery-nav",
        "container",
        "container--align--center"
    ));

    $nav = "<nav class=\"{$classes}\">\n";
    
    global $sections;
    
    foreach ($sections as $section) {
        $year = str_replace("Private: ", "", get_the_title($section));
        $nav .= "<a class=\"gallery-nav__year\" href=\"#{$year}\">{$year}</a>";
    }
    
    $nav .= "</nav>";
    
    return $nav;
}
?>
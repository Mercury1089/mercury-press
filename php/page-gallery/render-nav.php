<?php
// Render the navigation bar for the sections.
function render_nav() {
    $nav = "
    <section class=\"year-nav\">
        <nav class=\"year-nav__nav\">\n
    ";
    
    global $sections;
    
    foreach ($sections as $section) {
        $year = str_replace("Private: ", "", get_the_title($section));
        $nav .= "<a class=\"year-nav__year\" href=\"#$year\">$year</a>";
    }
    
    $nav .= "</nav></section>";
    
    echo $nav;
}
?>
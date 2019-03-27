<?php
// Gets the title of the window based on the current page
function get_title() {
    $title_string = "";
        
    if (is_front_page())
        $title_string = "";
    else 
        $title_string = single_post_title() . " | ";
    
    return $title_string . get_bloginfo('name'); 
}
?>
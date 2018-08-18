<?php
// Add theme supports
function mercury_press_add_support() {
    add_theme_support( 'post-thumbnails' ); 

}

// Register nav menus
function mrecury_press_register_menus() {
    register_nav_menus(array(
        'header' => __("Header"),
        'footer' => __("Footer")
    ));
}

// Theme init function
// This hooks into the init wp action
function mercury_press_init() {
    mrecury_press_register_menus();
    mercury_press_add_support();
}

add_action('init', 'mercury_press_init');
?>
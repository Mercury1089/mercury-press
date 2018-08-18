<?php
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
}

add_action('init', 'mercury_press_init');
?>
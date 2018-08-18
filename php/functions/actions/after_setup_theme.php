<?php
// Add theme supports
function mercury_press_add_theme_supports() {
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => 'orange',
            'color' => '#f7941e',
        ),
        array(
            'name' => 'light gray',
            'color' => '#d2d2d4',
        ),
        array(
            'name' => 'dark gray',
            'color' => '#333',
        )
    ));
}

// Theme after_theme_setup function
// This hooks into the after_theme_setup wp action
function mercury_press_after_setup_theme() {
    mercury_press_add_theme_supports();
}

add_action('after_setup_theme', 'mercury_press_after_setup_theme');
?>
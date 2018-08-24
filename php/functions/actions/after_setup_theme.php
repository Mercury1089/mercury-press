<?php
// Add theme supports
function mercury_press_add_theme_supports() {
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'align-wide' );
    add_theme_support( 'align-full' );

    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => 'orange',
            'slug' => 'orange',
            'color' => '#f7941e',
        ),
        array(
            'name' => 'light gray',
            'slug' => 'light-gray',
            'color' => '#d2d2d4',
        ),
        array(
            'name' => 'dark gray',
            'slug' => 'dark-gray',
            'color' => '#333',
        ),
        array(
            'name' => 'black',
            'slug' => 'black',
            'color' => '#000',
        ),
        array(
            'name' => 'white',
            'slug' => 'white',
            'color' => '#fff',
        ),
    ));
}

// Theme after_theme_setup function
// This hooks into the after_theme_setup wp action
function mercury_press_after_setup_theme() {
    mercury_press_add_theme_supports();
}

add_action('after_setup_theme', 'mercury_press_after_setup_theme');
?>
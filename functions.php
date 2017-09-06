<?php 

// Register and enqueue resources
function resources() {
    // Deregister WordPress's jQuery plugin
    wp_deregister_script( 'jquery' );
    
    // Register resources
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
    wp_register_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery' ));
    wp_register_script( 'load-transition', get_template_directory_uri() . '/js/load-transition.js', array( 'jquery' ));
    wp_register_script( 'header-transition', get_template_directory_uri() . '/js/header-transition.js', array( 'jquery' ));
    wp_register_script( 'header-transition', get_template_directory_uri() . '/php/bem_walker.php');

    // Enqueue resources
    wp_enqueue_script( 'smooth-scroll' );
    wp_enqueue_script( 'load-transition' );
    wp_enqueue_script( 'header-transition' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

// Register nav menus
register_nav_menus(array(
    'header' => __("Header"),
    'footer' => __("Footer")
));

// Require BEM nav walker
require 'php/bem_walker.php';

// Register widget sidebar
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => "Footer",
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget__title">',
        'after_title' => '</h3>',
    )
);

add_action('wp_enqueue_scripts', 'resources');
?>
<?php 

// Register and enqueue resources
function resources() {
    // Deregister WordPress's jQuery plugin; it's out of date anyway
    //wp_deregister_script( 'jquery' );
    
    // Register dependencies
    // These do not need to be enqueued
    // wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
    wp_register_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js' );
    wp_register_script( 'jquery-scrollTo', get_template_directory_uri() . '/js/plugins/jquery.scrollTo.js', array( 'jquery' ) );
    wp_register_script( 'easing', get_template_directory_uri() . '/js/plugins/easing.js', array( 'jquery' ) );
    wp_register_script( 'hamburger', get_template_directory_uri() . '/js/plugins/jquery.hmbrgr.js', array( 'jquery' ) );
    wp_register_script( 'lightbox', get_template_directory_uri() . '/js/plugins/lightbox.min.js', array( 'jquery' ) );
    
    // Register Scripts
    wp_register_script( 'body', get_template_directory_uri() . '/js/modules/body.js', array( 'jquery', 'jquery-ui', 'jquery-scrollTo', 'easing' ));
    wp_register_script( 'nav', get_template_directory_uri() . '/js/modules/nav.js', array( 'jquery' ));
    wp_register_script( 'fadeable', get_template_directory_uri() . '/js/modules/fadeable.js', array( 'jquery' ));
    wp_register_script( 'accordion-tabs', get_template_directory_uri() . '/js/modules/accordion-tabs.js', array( 'jquery' ));

    // Enqueue resources
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'hamburger' );
    wp_enqueue_script( 'lightbox' );

    wp_enqueue_script( 'body' );
    wp_enqueue_script( 'nav' );
    wp_enqueue_script( 'fadeable' );
    wp_enqueue_script( 'accordion-tabs' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

// Extra functions and such
require 'php/functions/bem_walker.php';
require 'php/functions/split_content.php';
require 'php/functions/get_title.php';
require 'php/functions/embed_yt.php';
require 'php/functions/generate_rand_p.php';

// Register nav menus
register_nav_menus(array(
    'header' => __("Header"),
    'footer' => __("Footer")
));

// Register widget sidebars
function register_theme_sidebars() {
    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name' => "Footer",
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer-widget__title">',
            'after_title' => '</h3>',
        ));
        
        register_sidebar(array(
            'name' => "Blog Sidebar",
            'before_widget' => '<div class="blog-sidebar-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="blog-sidebar-widget__title">',
            'after_title' => '</h3>',
        ));

        register_sidebar(array(
            'name' => "Sponsors Images",
            'before_widget' => '<div class="sponsors-widget--safe">',
            'after_widget' => '</div>',
            'before_title' => '<span style="display:none">',
            'after_title' => '</span>',
        ));
    }
}

add_action( 'widgets_init', 'register_theme_sidebars' );
add_action( 'wp_enqueue_scripts', 'resources' );
add_theme_support( 'post-thumbnails' ); 
?>
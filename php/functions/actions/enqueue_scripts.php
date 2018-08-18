<?php
// Register and enqueue scripts and other resources
function mercury_press_enqueue_scripts() {
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
add_action( 'wp_enqueue_scripts', 'mercury_press_enqueue_scripts' );
?>
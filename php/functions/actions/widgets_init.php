<?php
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

// Widgets Init function
// This hooks into the widgest_init wp action
function mercury_press_widgets_init() {
    register_theme_sidebars();
}

add_action( 'widgets_init', 'mercury_press_widgets_init' );
?>
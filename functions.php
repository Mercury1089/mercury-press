<?php 

// Register and enqueue resources
function resources() {
    // Deregister WordPress's jQuery plugin; it's out of date anyway
    wp_deregister_script( 'jquery' );
    
    // Register dependencies
    // These do not need to be enqueued
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
    wp_register_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js' );
    wp_register_script( 'jquery-scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.js', array( 'jquery' ) );
    wp_register_script( 'easing', get_template_directory_uri() . '/js/easing.js', array( 'jquery' ) );
    
    // Register Scripts
    wp_register_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery', 'jquery-ui', 'jquery-scrollTo', 'easing' ));
    wp_register_script( 'load-transition', get_template_directory_uri() . '/js/load-transition.js', array( 'jquery' ));
    wp_register_script( 'header-transition', get_template_directory_uri() . '/js/header-transition.js', array( 'jquery' ));

    // Enqueue resources
    wp_enqueue_script( 'smooth-scroll' );
    wp_enqueue_script( 'load-transition' );
    wp_enqueue_script( 'header-transition' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

// Require BEM nav walker
require 'php/bem_walker.php';

// Register nav menus
register_nav_menus(array(
    'header' => __("Header"),
    'footer' => __("Footer")
));

// Register widget sidebar
function register_theme_sidebars() {
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => "Footer",
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget__title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => "Blog Sidebar",
        'before_widget' => '<div class = "blog-sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="blog-sidebar-widget__title">',
        'after_title' => '</h3>',
    ));
}

// Split content at the more tag and return an array
function split_content() {
	global $more;
	$more = true;
	$content0 = preg_split('/<span id="more-\\d+"><\\/span>/i', get_the_content('more'));      // first <!--more--> tag gets turned into <span id="more-[number]"></span>
	$content1 = preg_split('/<!--more-->/i', $content0[1]);	// but all the remaining ones are left as <!--more-->
	$content = array_merge(array($content0[0]), $content1);	// so we have this here ugly hack
	
	for($c = 0, $csize = count($content); $c < $csize; $c++) {
		$content[$c] = apply_filters('the_content', $content[$c]);
	}
	return $content;
}

// Gets the title of the window based on the current page
function get_title() {
    $title_string = "";
        
    if (is_front_page())
        $title_string = "";
    else if (is_home())
        $title_string = "Team Blog | ";
    else if (is_post_type_archive( 'robot' ))
        $title_string = "Our Robots | ";
    else 
        $title_string = single_post_title() . " | ";
    
    return $title_string . get_bloginfo('name'); 
}

add_action( 'widgets_init', 'register_theme_sidebars' );
add_action( 'wp_enqueue_scripts', 'resources' );
add_theme_support( 'post-thumbnails' ); 
?>
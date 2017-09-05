<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php get_the_title(); ?> &mdash; <?php bloginfo('name');?></title>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        
        <nav class="site-header">
            <a href="<?php echo get_site_url(); ?>" class="home-link">
                <div class="logo"><?php include 'images/mercurylogo.svg';?></div>
                <span>MERCURY 1089</span>
            </a>
            <?php 
                $args = array(
                    'theme_location' => 'header'
                );

                wp_nav_menu( $args ); 
            ?>
        </nav>
        
        <?php if (is_front_page()) { ?>
            <header class="full-height" id="hero-image">
                <div id="hero-content">
                    <h1>#NEVERLASTALWAYSFIRST</h1>
                    <p>We don't just build robots, we build people.</p>
                </div>
            </header>
        <?php } else { ?>
            <header id="hero-image">
                <div id="hero-content">
                    <h1><?php echo the_title(); ?></h1>
                </div>
            </header>
        <?php } ?>
        <main class="page-content">
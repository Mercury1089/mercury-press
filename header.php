<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?php single_post_title(); ?> &mdash; <?php bloginfo('name');?></title>
        <?php wp_head(); ?>
    </head>
    
    <body <?php echo body_class(); ?>>
        
        <nav class="site-nav">
            <a href="<?php echo get_site_url(); ?>" class="home-link">
                <svg class="home-link__logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 736 1033" xml:space="preserve">
                    <path class="home-link__logo-path" d="M301,2c1.3,15.3,2.7,30.5,4,45.8c3.5,42,6.9,84,10.3,126c2.9,35,5.8,70,8.6,105.1
                        c3.9,47.6,7.8,95.3,11.8,142.9c0.7,8.9,1.5,17.8,2.3,27.7c57.2-43.1,113.6-85.7,170.7-128.7c0,236.5,0,472.3,0,708.1
                        c-0.1,0-0.3,0.1-0.4,0.1c-44.8-149.8-89.5-299.7-134.5-450.2c-48.7,25.5-96.8,50.7-145.5,76.2c-2.9-17.1-5.6-33.3-8.3-49.6
                        c-8.9-53.4-17.8-106.7-26.6-160.1c-8.8-53.2-17.6-106.4-26.4-159.7c-7.9-47.5-15.8-94.9-23.7-142.4c-0.6-3.3,0.1-5.4,2.8-7.7
                        C196.6,92,247.1,48.2,297.5,4.4c0.9-0.8,1.7-1.6,2.5-2.4C300.3,2,300.7,2,301,2z"/>
                    <path class="home-link__logo-path" d="M736,534c-0.6,5.8-1.3,11.6-1.8,17.5c-9.6,105.7-49.7,196.3-132.2,265.7c-19.4,16.4-40.9,29.7-63.7,40.9
                        c-1.4,0.7-2.9,1.3-5,2.2c0-15.5,0.3-30.5-0.2-45.4c-0.2-5.8,1.8-8.7,6.6-11.7c60.1-36.6,100.4-89.4,125.1-154.6
                        c13-34.3,20.3-69.8,22.5-106.5c3.9-66.4-7.5-129.8-38.6-188.8c-42.5-80.7-109-130.5-197.9-150.3c-34.9-7.8-70.2-9.5-105.8-7.4
                        c-1.1,0.1-2.3,0-4.1,0c-1.3-15.5-2.6-30.8-4-47c7.4-0.4,14.7-1,21.9-1.2c68.7-1.4,134.6,10.4,195.4,43.7
                        c71.4,39.1,120.7,97.8,151.5,172.5c16.3,39.7,25.7,81.1,28.5,123.9c0.4,5.5,1.1,11,1.7,16.5C736,514,736,524,736,534z"/>
                    <path class="home-link__logo-path" d="M132.7,226c2.9,17.9,5.8,35,8.4,52.1c0.3,1.7-0.3,4.1-1.4,5.2C90.2,334.4,62.3,396,52.8,465.9
                        c-12.8,94.6,5.5,182.4,62.1,260.3C158.5,786.3,218,822.8,290.2,839c38.8,8.7,78.2,10,117.7,6.8c6.4-0.5,12.8-1.6,19.6-2.4
                        c4.6,15.2,9,30.1,13.7,45.8c-9.7,1.3-19.1,2.7-28.4,3.7c-28.3,2.7-56.6,2.9-84.8,0c-90.6-9.3-168.7-44.4-230.3-112.7
                        c-44.8-49.6-72.5-108-86.7-172.9c-5.7-25.9-9.1-52.1-8.2-78.7c0.7-19.1-0.6-38.5,1.6-57.4C15.7,375.6,54.2,293.7,127.8,230
                        C129.2,228.8,130.6,227.7,132.7,226z"/>
                </svg>
                <span class="home-link__title">MERCURY 1089</span>
            </a>
            <?php bem_menu('header', 'site-nav-menu'); ?>
        </nav>
        
        <?php
            if (!is_front_page() && !is_home() && has_post_thumbnail() ) {
        ?>
        <style>
            .hero {
                background-image: url(<?php get_the_post_thumbnail_url( null, 'full' ); ?>);
            }
        </style>
        <?php } ?>
        
        <?php if (is_front_page()) { ?>
            <header class="hero hero--landing">
                <h1 class="hero__content hero__large-text">TEAM MERCURY</h1>
                <p class="hero__content hero__small-text">TEAM MERCURY</p>
            </header>
            <main class="page-content">
        <?php } else if ( is_home() ) { ?>
            <header class="hero hero--blog">
                <h1 class="hero__content hero__large-text">Team Mercury Blog</h1>
                <p class="hero__content hero__small-text">Your source of info on our current events.</p>
            </header>
            <main class="page-content page-content--three-column">
        <?php } else { ?>
            <header class="hero">
                <h1 class="hero__content hero__large-text"><?php echo single_post_title(); ?></h1>
            </header>
            <main class="page-content">
        <?php } ?>
        
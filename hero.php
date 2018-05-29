<?php if (is_front_page()) { // Front page hero ?>
    <header class="hero parallax hero--full-height">
        <h1 class="hero__content hero__large-text">TEAM MERCURY</h1>
        <p class="hero__content hero__small-text">Cool one-liner</p>
        <a class="button hero__call-to-action landing-section__button landing-section__button--light" href="#jump">LEARN MORE</a>
    </header>
    <main class="page-content page-content--landing">
<?php } else if ( is_home() ) { // Blog feed hero ?>
    <header class="hero parallax">
        <h1 class="hero__content hero__large-text"><?php echo get_the_title( get_option('page_for_posts') );?></h1>
        <p class="hero__content hero__small-text">aka The Team Blog</p>
    </header>
    <main class="page-content page-content--blog">
<?php } else if ( is_page() ) { // Single page hero
        if ( has_post_thumbnail() ) {
?>
        <style>
            .hero {
                background-image: none !important;
                background-color: rgba(0,0,0,0.5);
            }
            
            .hero:before {
                background-image: url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>) !important;
            }
        </style>
        <header class="hero hero--small-height hero--custom-image">
    <?php } else { ?>
        <header class="parallax hero hero--small-height">
    <?php } ?>
        <h1 class="hero__content hero__large-text"><?php echo single_post_title(); ?></h1>
    </header>
    <main class="page-content">
<?php } else if ( is_singular( 'robot' ) ) { // Robot page hero
        if ( has_post_thumbnail() ) {
?>
        <style>
            .hero {
                background-image: none !important;
                background-color: rgba(0,0,0,0.5);
            }
            
            .hero--custom-image:before {
                background-image: url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>) !important;
            }
        </style>
        <header class="hero hero--medium-height hero--custom-image">
    <?php } else { ?>
        <header class="hero hero--medium-height">
    <?php } ?>
        <h1 class="hero__content hero__large-text"><?php echo single_post_title(); ?></h1>
        <p class="hero__content hero__small-text">
            <?php 
                global $wp_query;
                    
                $post_id = $wp_query->post->ID;
                echo get_post_meta( $post_id, 'robot-year-meta', true ) . ": " . get_post_meta( $post_id, 'robot-game-meta', true ); 
            ?>
        </p>
    </header>
    <main class="page-content page-content--robot-page">
<?php } else if ( is_post_type_archive( 'robot' ) ) { // Archive robot page hero ?>
    <header class="parallax hero hero--medium-height">
        <h1 class="hero__content hero__large-text">robot archive</h1>
        <p class="hero__content hero__small-text">All the robots we have made up to this point</p>
    </header>
    <main class="page-content page-content--archive-robot">
<?php } else {
    if ( has_post_thumbnail() ) {
?>
                <style>
                    .hero {
                        background-image: none !important;
                        background-color: rgba(0,0,0,0.5);
                    }
                    
                    .hero:before {
                        background-image: url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>) !important;
                    }
                </style>
                <header class="hero hero--medium-height hero--custom-image">
<?php } else { // Single post hero?>
    <header class="parallax hero hero--medium-height">
<?php
        }

    global $post;
    $author_id = $post->post_author;
    $date = $post->post_date;
?>
        <h1 class="hero__content hero__large-text"><?php echo single_post_title(); ?></h1>
        <p class="hero__content hero__small-text">
            By <?php the_author_meta( 'display_name', $author_id ); ?> | <?php echo $date; ?> 
        </p>
    </header>
    <main class="page-content">
<?php } ?>
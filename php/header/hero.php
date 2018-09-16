<?php
    global $post;

    $post_id = $post->ID;
    
    $hero_class = array("hero");
    $content = "";

    $call = array();
    $hero_img = get_theme_file_uri( "./images/default/hero_default.jpg" );

    // Create hero
    // Get custom hero image
    if ( is_archive() ) { // Any type of archive
        $postType = get_queried_object()->name;
        switch($postType) {
            case 'robot':
                $hero_img = get_the_post_thumbnail_url( null, 'full' );
                break;
        }
    } else if ( !empty( get_the_post_thumbnail_url( null, 'full' ) ) ) {
        $hero_img = get_the_post_thumbnail_url( null, 'full' );
    }

    // Hero sizes
    if (is_front_page()) // Full-height hero is for the front-page only.
        array_push($hero_class, "hero--large");
    else if ( is_singular( array('post', 'robot') ) ) // Not-so full-page
        array_push($hero_class, "hero--medium");

    // Hero content
    if ( is_singular( 'robot' ) ) { // Robot single
        $title = get_the_title( $post );
        $year = get_post_meta( $post_id, 'robot-year-meta', true );
        $game = get_post_meta( $post_id, 'robot-game-meta', true );

        $content .= "<h1>{$title}</h1>";
        $content .= "<p>{$year}: {$game}</p>"; 
    } else if ( is_post_type_archive( 'robot' ) ) { // Robot Archive
        $content .= "<h1>Robot Archive</h1>";
        $content .= "<p>Mercury's past of scrap metal and stuff</p>";
    } else if ( is_front_page() ) { // Front Page
        $page = get_post( get_option( 'page_on_front' ) );
        $content = apply_filters( 'the_content', $page->post_content );
    } else if ( is_home() ) { // Blog Feed
        $page =  get_post( get_option( 'page_for_posts' ) );
        $content = apply_filters( 'the_content', $page->post_content );
    } else if ( is_singular( 'page' ) ) { // Single page
        $content .= "<h1>{$title}</h1>";
    } else { // Catch-All (Most likely single blog post)
        $title = get_the_title( $post );
    
        $date = get_the_date('F d, Y', $post_id);
        
        $author_id = $post->post_author;
        $author = get_the_author_meta( 'display_name', $author_id );

        $content .= "<h1>{$title}</h1>";
        $content .= "<p>By {$author} | Written {$date}</p>";
    }

    // Hero Button Content
?>
<style>
    .hero:before {
        background-image: url(<?php echo $hero_img; ?>);
    }
</style>
<header class="<?php echo implode(" ", $hero_class); ?>">
    <div class="hero__content">
        <?php echo $content; ?>
    </div>
</header>
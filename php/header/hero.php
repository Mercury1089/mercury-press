<?php
    global $post;
    $post_id = $post->ID;
    $author_id = $post->post_author;
    $date = $post->post_date;

    // Create hero
    $hero_class = array("hero");
    $content = array(
        get_the_title( $post ), 
        "By" . get_the_author_meta( 'display_name', $author_id ) . " | " . $date
    );
    $call = null;

    // Hero sizes
    if (is_front_page()) // Full-height hero is for the front-page only.
        array_push($hero_class, "hero--large");
    else if ( is_singular( array('post', 'robot') ) ) // Not-so full-page
        array_push($hero_class, "hero--medium");

    // Hero content
    if ( is_singular( 'robot' ) ) {
        $content[1] = 
            get_post_meta( $post_id, 'robot-year-meta', true ) . ": " . 
            get_post_meta( $post_id, 'robot-game-meta', true );
    } else if ( is_front_page() || is_home() ) { // Custom titling and stuff
        if ( is_front_page() )
            $page = get_post( get_option( 'page_on_front' ) );
        else
            $page = get_post( get_option( 'page_for_posts' ) );
        
        $content[0] = $page->post_title;
        $content[1] = $page->post_content;
    }
?>
<header class="<?php echo implode(" ", $hero_class); ?>">
    <div class="hero__content">
        <h1 class="hero-content__text hero-content__text--large"><?php echo $content[0]; ?></h1>
        <p class="hero-content__text hero-content__text--small"><?php echo $content[1]; ?></p>
    </div>
</header>
<main class="page-content page-content--blog">
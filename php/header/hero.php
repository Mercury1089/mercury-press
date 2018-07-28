<?php
    global $post;
    $post_id = $post->ID;
    $author_id = $post->post_author;
    $date = $post->post_date;

    // Create hero
    $hero = array("hero");
    $content = array(
        get_the_title( $post ), 
        "By" . get_the_author_meta( 'display_name', $author_id ) . " | " . $date
    );

    // Hero sizes
    if (is_front_page()) // Full-height hero is for the front-page only.
        array_push($hero, "hero--large");
    else if ( is_singular( array('post', 'robot') ) ) // Not-so full-page
        array_push($hero, "hero--medium");

    // Hero content
    if ( is_singular( 'robot' ) ) {
        $content[1] = 
            get_post_meta( $post_id, 'robot-year-meta', true ) . ": " . 
            get_post_meta( $post_id, 'robot-game-meta', true );
    } else if ( is_front_page() ) { // Custom titling and stuff
        $frontpage = get_post( get_option( 'page_on_front' ) );
        $content[1] = $post->post_content;
    }
?>
<header class=<?php echo implode(" ", $hero); ?>>
        <h1 class="hero__content hero__large-text"><?php echo $content[0]; ?></h1>
        <p class="hero__content hero__small-text"><?php echo $content[1]; ?></p>
</header>
<main class="page-content page-content--blog">
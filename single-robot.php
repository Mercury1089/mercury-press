<?php
include 'php/single-robot/robot-pagination.php';
/**
 * Template Name: Robot Page
 * Template Post Type: robot
 */
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        
        $postID = get_the_ID();

        $seasonDesc = wpautop( get_post_meta($postID, "robot-season-desc-meta", true) );
        $features = wpautop( get_post_meta($postID, "robot-features-meta", true) );

        $width = wpautop( get_post_meta($postID, "robot-features-meta", true) );
?>
    <section class="grid content__section">
        <h2 class="text grid__item">THE GAME</h2>
        <div class="grid__item grid__item--col-l--6 grid__item--col-m--5 grid__item--col-s--6">
            <?php
                if ( !empty($seasonDesc) ) 
                    echo $seasonDesc;
                else
                    echo generate_rand_p(); 
            ?>
        </div>
        <?php include 'php/single-robot/season-videos.php'?>
    </section>
    <section class="grid content__section">
        <h2 class="text grid__item">THE ROBOT</h2>
        <div class="grid__item grid__item--col-l--6 grid__item--col-m--5 grid__item--col-s--6">
            <h4 class="text">Robot Features</h4>
            <?php echo $features; ?>
        </div>
    </section>
<?php
robot_pages_get_navigation(get_post());
}
} else {
    echo '<p>No content found</p>';
}
get_footer(); ?>
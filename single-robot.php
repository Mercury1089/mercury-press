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

?>
    <section class="grid content__section">
        <div class="grid__item grid__item--col-l--6 grid__item--col-m--5 grid__item--col-s--6">
            <?php echo $seasonDesc; ?>
        </div>
        <?php include 'php/single-robot/season-videos.php'?>
    </section>
<?php
robot_pages_get_navigation(get_post());
}
} else {
    echo '<p>No content found</p>';
}
get_footer(); ?>
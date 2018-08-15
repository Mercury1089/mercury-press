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

        $imgSrc = get_post_meta($postID, "robot-img-meta", true);

        if ( empty($imgSrc) )
            $imgSrc = get_theme_file_uri('/images/default/thumbnail_default.jpg');
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
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <img src="<?php echo $imgSrc;?>" />
        </div>
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <h4 class="text">Stats</h4>
            <?php include 'php/single-robot/robot-info.php'?>
        </div>
        <div class="grid__item grid__item--col-l--4 grid__item--col-m--3 grid__item--col-s--6">
            <h4 class="text">Features</h4>
            <?php 
                if ( !empty( $features ) ) { 
                    $featuresModified = substr_replace($features, " class=\"robot-features\"", 3, 0);
                    echo $featuresModified;
                } else
                    echo generate_rand_p(); 
            ?>
        </div>
    </section>
<?php
robot_pages_get_navigation(get_post());
}
} else {
    echo '<p>No content found</p>';
}
get_footer(); ?>
<?php 
    get_header();

    // Gotta create our own WP_Query
    // so we can do our own custom sorting and post limit
    $query = new WP_Query( array(
        'post_type' => 'robot',
        'order' => 'DESC',
        'meta_key' => 'robot-year-meta',
        'orderby' => 'meta_value_num',
        'posts_per_page' => -1
    ));
?>
<section class="grid content__section">
<?php
    if ($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            include 'php/archive-robot/robot.php';
        }
    } else {
        echo '<p>No Content!</p>';
    }
    ?>
    </section>
<?php get_footer(); ?>
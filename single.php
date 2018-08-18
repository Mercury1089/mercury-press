<?php

    get_header();

    if (have_posts()) {
        while(have_posts()) {
            the_post();
?>
    <section class="content__section wp-content">
        <?php the_content(); ?>
    </section>
    <!-- <section class="content__section content__section--type--comments">
        <?php // comments_template(); ?>
    </section> -->
<?php
            wp_reset_postdata();
        }
    } else {
        echo '<p>No content found</p>';
    }
?>

<?php get_footer(); ?>
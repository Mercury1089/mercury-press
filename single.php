<?php

    get_header();

    if (have_posts()) {
        while(have_posts()) {
            the_post();
?>
    <section class="post__section post__body">
        <?php the_content(); ?>
    </section>
    <section class="post__section post__comments">
        <?php comments_template(); ?>
    </section>
<?php
        }
    } else {
        echo '<p>No content found</p>';
    }
?>

<?php get_footer(); ?>
<?php 
    get_header();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
?>
        <section class="content__section wp-content">
            <?php echo the_content(); ?>
        </section>
<?php
        }
    } else {
        echo 'No content!';
    }
    get_footer(); 
?>
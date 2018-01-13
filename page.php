<?php 
    get_header();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
?>
        <section class="page__section page__body">
            <?php echo the_content(); ?>
        </section>
<?php
        }
    } else {
        echo 'No content!';
    }
    get_footer(); 
?>
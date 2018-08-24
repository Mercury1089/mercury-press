<?php
/**
 * Template Name: Two-Column
 * Template Page Type: post
 */ 
    get_header();

    if (have_posts()) {
        while (have_posts()) {
            the_post();

            $content = split_content();
?>
    <section class="page__section page__body page__body--half-width">
        <?php echo array_shift($content); ?>
    </section>
    <section class="page__section page__body page__body--half-width">
        <?php echo implode($content); ?>
    </section>
<?php
        }
    } else {
        echo 'No content!';
    }
    get_footer(); 
?>
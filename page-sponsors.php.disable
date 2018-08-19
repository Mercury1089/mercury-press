<?php 
    get_header();

    if (have_posts()) {
        while (have_posts()) {
			the_post();
?>
        <section class="page__section page__body page__body--sponsors">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sponsors Images") ) ?>
        </section>
<?php
        }
    } else {
        echo 'No content!';
    }
    get_footer(); 
?>
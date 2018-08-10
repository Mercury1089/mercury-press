<?php get_header(); ?>
    <section class="content__section">
    <?php 
        if (have_posts()) {
            while(have_posts()) {
                the_post(); 
                include 'php/home/feed-item.php'; 
            } 
    ?>
    </section>
    <?php 
        } else {
            echo '<p>No content found</p>';
        }
    ?>
    </section>
    <?php 
        if (have_posts()) {
            echo the_posts_pagination(array(
                'mid-size' => 4,
                'prev_text'          => "«",
                'next_text'          => "»",
            )); 
        }
    ?>
<?php get_footer(); ?>
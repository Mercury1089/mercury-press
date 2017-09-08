<?php

    get_header();

    if (have_posts()) {
        while(have_posts()) {
            the_post();
?>
    <article class="blog-post">
        <h3 class="blog-post__date"> 
            <span class="blog-post__date-span blog-post-date__year"><?php echo get_the_date('Y'); ?></span> 
            <span class="blog-post__date-span blog-post-date__month"><?php echo get_the_date('M'); ?></span>
            <span class="blog-post__date-span blog-post-date__day"><?php echo get_the_date('j'); ?></span>
        </h3>
        <div class="blog-post__content">
            <h2 class="blog-post__title"><?php echo the_title(); ?></h2>
            <h4 class="blog-post__author"><?php the_author(); ?></h4>
            <p class="blog-post__excerpt"><?php echo get_the_excerpt(); ?></p>
        </div>
    </article>
<?php        
        }
    } else {
        echo '<p>No content found</p>';
    }

    get_footer();
?>
<article class="feed-item">
    <div class="feed-item__date feed-item__date--mq--large"> 
        <h6 class="feed-item-date__line feed-item-date__line--year"><?php echo get_the_date('Y'); ?></h6> 
        <h6 class="feed-item-date__line feed-item-date__line--month"><?php echo get_the_date('M'); ?></h6>
        <h6 class="feed-item-date__line feed-item-date__line--day"><?php echo get_the_date('d'); ?></h6>
    </div>
    <div class="feed-item__body">
        <h5 class="feed-item__title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
        <h6 class="feed-item__date feed-item__date--mq--small"><?php echo get_the_date( 'Y M d' ); ?></h6>
        <h6 class="feed-item__author">Written by <?php echo get_the_author_link(); ?></h6>
        <p class="feed-item__excerpt"><?php echo get_the_excerpt(); ?></p>
    </div>
</article>
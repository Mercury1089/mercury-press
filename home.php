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
    <section class="content__section container container--direction--row container--justify--center container--align--center">
<?php 
    global $wp_query;

    $big = 999999999; // need an unlikely integer
    
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_text'          => __('«'),
	    'next_text'          => __('»'),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
?>
    </section>
<?php get_footer(); ?>
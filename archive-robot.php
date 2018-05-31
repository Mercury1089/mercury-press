<?php 
    get_header();

    // Gotta create our own WP_Query 
    // so we can do our own custom sorting and post limit
    $query = new WP_Query( array(
        'post_type' => 'robot',
        'order' => 'DESC',
        'meta_key' => 'robot-year-meta',
        'orderby' => 'meta_value_num',
        'posts_per_page' => -1
    ));
    
    if ($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            
            $postID = get_the_ID();

            $post_img = get_post_meta($postID, 'robot-icon-meta', true);
            $robot_name = get_the_title();
            $robot_year = get_post_meta($postID, 'robot-year-meta', true);

            if (empty($post_img))
                $post_img = get_theme_file_uri('/images/default.jpg');

            if (empty($robot_year)) {
                $robot_year = '20XX';
            }
?>
    <a href="<?php echo get_post_permalink(); ?>" class="robot">
        <img class="robot__icon" src="<?php echo $post_img; ?>" /> 
        <h5 class="robot__name"><?php echo $robot_name; ?></h5>
        <h6 class="robot__year"><?php echo $robot_year; ?></h6>
    </a>
<?php
        }
    } else {
        echo 'Boneless';
    }
    get_footer(); 
?>
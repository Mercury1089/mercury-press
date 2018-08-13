<?php
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
<a href="<?php echo get_post_permalink(); ?>" class="robot grid__item grid__item--col-s--3 grid__item--col-m--3 grid__item--col-l--3">
    <img class="image image--round robot__thumbnail" src="<?php echo $post_img; ?>" /> 
    <h5 class="robot__caption"><?php echo $robot_name; ?></h5>
    <h6 class="robot__caption"><?php echo $robot_year; ?></h6>
</a>
<?php
    global $post;

    $postID = $post->ID;

    $name = $post->post_title;
    $status = get_post_meta($postID, "robot-status-meta", true);

    $length = get_post_meta($postID, "robot-length-meta", true);
    $width = get_post_meta($postID, "robot-width-meta", true);
    $height = get_post_meta($postID, "robot-height-meta", true);
    $weight = get_post_meta($postID, "robot-weight-meta", true);

?>
<ul class="robot-info">
    <li>
        <p><span class="robot-info__label text text--font-family--roboto-mono text--color--white text--weight--bold">Name</span><?php echo $name; ?></p>
    </li>
    <li>
        <p><span class="robot-info__label text text--font-family--roboto-mono text--color--white text--weight--bold">Status</span><?php echo ucfirst($status); ?></p>
    </li>
    <li>
        <p><span class="robot-info__label text text--font-family--roboto-mono text--color--white text--weight--bold">Size</span><?php echo $length . "\" L × " . $width . "\" W × " . $height . "\" H"; ?></p>
    </li>
    <li>
        <p><span class="robot-info__label text text--font-family--roboto-mono text--color--white text--weight--bold">Weight</span><?php echo $weight . " lbs"; ?></p>
    </li>
</ul>
<?php
    global $post;

    $postID = $post->ID;

    $name = $post->post_title;
    $status = get_meta_or_default($postID, "robot-status-meta", true, "Unknown");

    $length = get_meta_or_default($postID, "robot-length-meta", true, "??");
    $width = get_meta_or_default($postID, "robot-width-meta", true, "??");
    $height = get_meta_or_default($postID, "robot-height-meta", true, "??");
    $weight = get_meta_or_default($postID, "robot-weight-meta", true, "???");

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
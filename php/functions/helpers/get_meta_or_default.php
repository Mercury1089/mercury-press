<?php
    // Get post meta or default
    function get_meta_or_default(int $postID, string $metaKey, bool $single, string $default) {
        $meta = get_post_meta($postID, $metaKey, $single);

        if ( !empty( $meta ) )
            return $meta;
        else
            return $default;
    }
?>
<?php
    // Helper function to quickly embed YT vids
    function embed_yt_func(array $atts) {
        $a = shortcode_atts( array(
            'id' => '',
        ), $atts );
        $opts = implode("&", array(
            "color=white",
            "rel=0",
            "showinfo=0"
        ));
        $id = $a['id'];
        $src = "https://www.youtube.com/embed/{$id}?{$opts}"
?>
    <div class="iframe-container">
        <iframe class="iframe" src="<?php echo $src; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
<?php 
    }

    add_shortcode('embed_yt', 'embed_yt_func');
?>
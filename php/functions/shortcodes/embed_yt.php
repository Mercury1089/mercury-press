<?php
    // Helper function to quickly embed YT vids
    function embed_yt_func(array $atts) {
        $out = '';
        $a = shortcode_atts( array(
            'id' => '',
        ), $atts );
        $opts = implode("&", array(
            "color=white",
            "rel=0",
            "showinfo=0"
        ));
        $id = $a['id'];
        $src = "https://www.youtube.com/embed/{$id}?{$opts}";
        
        $out .= '<div class="iframe-container">';
        $out .= "<iframe class=\"iframe\" src={$src} frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>";
        $out .= '</div>';

        return $out;
    }

    add_shortcode('embed_yt', 'embed_yt_func');
?>
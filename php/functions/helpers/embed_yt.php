<?php
    // Helper function to quickly embed YT vids
    function embed_yt(string $id) {
        $opts = implode("&", array(
            "color=white",
            "rel=0",
            "showinfo=0"
        ));
        $src = "https://www.youtube.com/embed/{$id}?{$opts}"
?>
    <div class="iframe-container">
        <iframe class="iframe" src="<?php echo $src; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
<?php 
    }
?>
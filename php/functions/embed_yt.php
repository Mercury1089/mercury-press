<?php
    // Helper function to quickly embed YT vids
    function embed_yt(string $id) { 
        $src = "https://www.youtube.com/embed/{$id}"
?>
    <div class="iframe-container">
        <iframe class="iframe" src="<?php echo $src; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
<?php 
    }
?>
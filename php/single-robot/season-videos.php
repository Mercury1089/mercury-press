<?php
    global $post;
    $postID = $post->ID;

    $gameReveal = get_post_meta($postID, "robot-game-reveal-meta", true);
    $robotReveal = get_post_meta($postID, "robot-robot-reveal-meta", true);
?>
<ul class="grid__item grid__item--col-l--6 grid__item--col-m--4 grid__item--col-s--6 accordion-tabs">
  <li class="tab-header-and-content">
    <a href="javascript:void(0)" class="is-active tab-link">Game Reveal</a>
    <div class="tab-content">
        <?php embed_yt($gameReveal); ?>
    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="javascript:void(0)" class="tab-link" <?php if ( !isset($robotReveal) || empty($robotReveal)) echo "disabled"; ?>>Robot Reveal</a>
    <div class="tab-content">
        <?php 
            if ( isset($robotReveal) && !empty($robotReveal) ) 
                embed_yt($robotReveal);
        ?>
    </div>
  </li>
</ul>
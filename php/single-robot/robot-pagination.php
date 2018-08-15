<?php
    function robot_pages_get_navigation(WP_Post $post) {
        $postID = $post->ID;
                    
        $youtubeID = get_post_meta($postID, 'robot-youtube-meta', true);

        $yearMeta = get_post_meta($postID, 'robot-year-meta', true);

        $prevLink = "";
        $prevLabel = "";
        $nextLink = "";
        $nextLabel = "";

        if (is_numeric($yearMeta)) {
            $currentYear = intval($yearMeta);
            $prevYear = $currentYear - 1;
            $nextYear = $currentYear + 1;
            
            $lastYearRobot = get_posts(array(
                'numberposts' => 1,
                'post_type' => 'robot',
                'meta_key' => 'robot-year-meta',
                'meta_value' => intval($prevYear)
            ));
            
            $nextYearRobot = get_posts(array(
                'numberposts' => 1,
                'post_type' => 'robot',
                'meta_key' => 'robot-year-meta',
                'meta_value' => intval($nextYear)
            ));
            
            if (!empty($lastYearRobot)) {
                $prevID = $lastYearRobot[0]->ID;
                $prevLink = get_post_permalink( $prevID );
                $prevLabel = $prevYear . ": " . get_post_meta( $prevID, 'robot-game-meta', true );
            }
            
            if (!empty($nextYearRobot)) {
                $nextID = $nextYearRobot[0]->ID;
                $nextLink = get_post_permalink( $nextID );
                $nextLabel = $nextYear . ": " . get_post_meta( $nextID, 'robot-game-meta', true );
            }

            ?><nav class="robot-page__section robot-page__nav robot-page__section--full-width"><?php
            if ( !empty($prevLink) ) {
                ?><a class="robot-page-nav__button robot-page-nav__button--prev" href="<?php echo $prevLink; ?>"><?php echo "« " . $prevLabel ?></a> <?php  
            } 
            if ( !empty($nextLink) ) {
                ?><a class="robot-page-nav__button robot-page-nav__button--next" href="<?php echo $nextLink; ?>"><?php echo $nextLabel . " »" ?></a><?php
            }
            ?></nav><?php
        }
    }
?>
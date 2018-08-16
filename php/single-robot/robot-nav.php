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
                $prevName = $lastYearRobot[0]->post_title;

                $prevLink = get_post_permalink( $prevID );
                $prevLabel = $prevYear . ": " . get_post_meta( $prevID, 'robot-game-meta', true ) . "<br>" . $prevName;
            }
            
            if (!empty($nextYearRobot)) {
                $nextID = $nextYearRobot[0]->ID;
                $nextName = $nextYearRobot[0]->post_title;

                $nextLink = get_post_permalink( $nextID );
                $nextLabel = $nextYear . ": " . get_post_meta( $nextID, 'robot-game-meta', true ) . "<br>" . $nextName;
            }

            ?><nav class="content__section robot-nav"><?php
            if ( !empty($prevLink) ) {
                ?>
                <a class="robot-nav__button robot-nav__button--prev" href="<?php echo $prevLink; ?>">
                    <span class="robot-nav__arrow">«</span>
                    <span class="robot-nav__label"><?php echo $prevLabel ?></span>
                </a>
                <?php  
            }
            if ( !empty($nextLink) ) {
                ?>
                <a class="robot-nav__button robot-nav__button--next" href="<?php echo $nextLink; ?>">
                    <span class="robot-nav__label"><?php echo $nextLabel; ?></span>
                    <span class="robot-nav__arrow">»</span>
                </a>
                <?php
            }
            ?></nav><?php
        }
    }
?>
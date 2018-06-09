<?php
    /**
     * Template Name: Robot (default)
     * Template Post Type: robot
     */
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            
            $postID = get_the_ID();
            
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
            }
            
			$content = split_content();
?>
    <section class="robot-page__section robot-page__section--full-width">
        <section class="robot-page__section robot-page__section--half-width">
            <?php print array_shift($content); ?>
        </section>
        <section class="robot-page__section robot-page__section--half-width robot-page__section--boxed">
            <?php print array_shift($content); ?>
        </section>
    </section>
    <?php if (!empty($youtubeID)) { ?>
    <section class="robot-page__section robot-page__section--full-width">
        <div class="robot-page__video-container">
            <iframe class="robot-page__video"src="https://www.youtube.com/embed/<?php print $youtubeID; ?>" frameBorder="0" allowFullScreen></iframe>
        </div>
    </section>
    <?php } ?>
    <?php if (!empty($content)) {?>
    <section class="robot-page__section robot-page__section--full-width">
        <?php print implode($content); ?>
    </section>
    <?php } ?>
    <nav class="robot-page__section robot-page__nav robot-page__section--full-width">
        <?php if (!empty($prevLink)) { ?>
            <a class="robot-page-nav__button robot-page-nav__button--prev" href="<?php echo $prevLink; ?>"><?php echo "« " . $prevLabel ?></a>
        <?php 
            }
            
            if (!empty($nextLink)) { 
        ?>
            <a class="robot-page-nav__button robot-page-nav__button--next" href="<?php echo $nextLink; ?>"><?php echo $nextLabel . " »" ?></a>
        <?php } ?>
    </nav>
<?php
        }
    } else {
        echo '<p>No content found</p>';
    }
?>
<?php get_footer(); ?>
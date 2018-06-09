<?php
    /**
     * Template Name: Robot (default)
     * Template Post Type: robot
     */
    get_header();

    $args = array(
        'post_type' => 'robot',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'meta_key' => 'robot-year-meta',
        'posts_per_page' => 1
    );
    $query = new WP_Query( $args );

    if ($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            
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

                $lastYearRobot = get_previous_post( );
                
                $nextYearRobot = get_next_post(  );
                
                if (!empty($lastYearRobot)) {
                    $prevLink = $lastYearRobot->ID;
                    $prevLabel = $prevYear . ": " . get_post_meta( $lastYearRobot->ID, 'robot-game-meta', true );
                }
                
                if (!empty($nextYearRobot)) {
                    $nextLink = $nextYearRobot->ID;
                    $nextLabel = $nextYear . ": " . get_post_meta( $nextYearRobot->ID, 'robot-game-meta', true );
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
            <a class="robot-page-nav__button robot-page-nav__button--prev" href="<?php echo esc_url( get_permalink( $prevLink ) ); ?>"><?php echo "« " . $prevLabel ?></a>
        <?php 
            }
            
            if (!empty($nextLink)) { 
        ?>
            <a class="robot-page-nav__button robot-page-nav__button--next" href="<?php echo esc_url( get_permalink( $nextLink ) ); ?>"><?php echo $nextLabel . " »" ?></a>
        <?php } ?>
    </nav>
<?php
        }
    } else {
        echo '<p>No content found</p>';
    }
?>
<?php get_footer(); ?>
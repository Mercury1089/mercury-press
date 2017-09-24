<?php
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            
            $postID = get_the_ID();
            
            $youtubeID = get_post_meta($postID, 'robot-youtube-meta', true);
            
            $currentYear = intval(get_post_meta($postID, 'robot-year-meta', true));
            
            $prevLink = "";
            $nextLink = "";
            $prevYear = $currentYear - 1;
            $nextYear = $currentYear + 1;
            $lastYearRobot = get_posts(array(
                'numberposts' => 1,
                'post_type' => 'robot',
                'meta_key' => 'robot-year-meta',
                'meta_value' => strval($prevYear)
            ));
            
            $nextYearRobot = get_posts(array(
                'numberposts' => 1,
                'post_type' => 'robot',
                'meta_key' => 'robot-year-meta',
                'meta_value' => strval($nextyear)
            ));
            
            if (count($lastYearRobot) === 1)
                $prevLink = trim($lastYearRobot[0]->post_name);
            
            if (count($nextYearRobot) === 1) {
                $nextLink = trim($nextYearRobot[0]->post_name);
            }
            
			$content = split_content();
?>
    <section class="robot-page__section robot-page__section--half-width">
        <?php print array_shift($content); ?>
    </section>
    <section class="robot-page__section robot-page__section--half-width robot-page__section--boxed">
        <?php print array_shift($content); ?>
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
            <a class="robot-page-nav__button" href="/robot/<?php $prevLink ?>">last</a>
        <?php 
            }
            
            if (!empty($nextLink)) { 
        ?>
            <a class="robot-page-nav__button" href="/robot/<?php echo !empty($nextLink) ?>">next</a>
        <?php } ?>
    </nav>
<?php
        }
    } else {
        echo '<p>No content found</p>';
    }
?>
<?php get_footer(); ?>
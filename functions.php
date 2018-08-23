<?php 
    // Actions
    require 'php/functions/actions/init.php';
    require 'php/functions/actions/enqueue_scripts.php';
    require 'php/functions/actions/widgets_init.php';
    require 'php/functions/actions/after_setup_theme.php';

    // Helper Functions
    require 'php/functions/helpers/bem_walker.php';
    require 'php/functions/helpers/split_content.php';
    require 'php/functions/helpers/get_title.php';
    require 'php/functions/helpers/embed_yt.php';
    require 'php/functions/helpers/generate_rand_p.php';
    require 'php/functions/helpers/get_meta_or_default.php';

    // Shortcodes
    require 'php/functions/shortcodes/calendar.php'
?>
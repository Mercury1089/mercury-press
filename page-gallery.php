<?php 
    get_header();
	
	// First we define all the sections that exist.
	// These are all children of the Gallery page, 
	// so make sure that that's in order first.
	$sections = get_children(
		array(
			'post_parent' => get_the_ID(),
			'post_type' => 'page'
		)
	);
	
	// Sort the sections by year.
	// str_replace removes the "Private: " prefix
	// that WordPress adds automatically to private pages
	usort($sections, function($a, $b) {
		$aYear = intval(str_replace("Private: ", "", get_the_title($a)));
		$bYear = intval(str_replace("Private: ", "", get_the_title($b)));

		if ($aYear == $bYear) {
			return 0;
		} else if ($aYear > $bYear) {   // descending
			return -1;
		} else {
			return 1;
		}
	});
	
	// include 'php/page-gallery/render-nav.php';
	include 'php/page-gallery/render-albums.php'
?>
    <p class="content__section">
        Here are all the
		pictures we take every year during our time in Robotics, both on-season and off-season.<br>
        Use the year nav below to jump to a specific year.
    </p>
<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			$content = get_the_content();
			// render_nav();
			render_albums();
		}
	}
	get_footer(); 
?>
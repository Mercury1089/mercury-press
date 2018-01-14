<?php 
    get_header();
	
	// First we define all the sections that exist.
	// These are all children of the Gallery page, 
	// so make sure that that's in order first.
	$sections = get_children(
		array (
			'post_parent' => get_the_ID(),
			'post_type' => 'page'
		)
	);
	
	// Sort the sections by year.
	// str_replace allows us to make them private,
	// but leaves the year w/o the "Private: " prefix
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
	
	// Render the navigation bar for the sections.
	function render_nav() {
		$nav = "
        <section class=\"year-nav\">
            <label for=\"year-nav__nav\" class=\"year-nav__label\">Year:</label>\n
            <nav class=\"year-nav__nav\">\n
        ";
		
		global $sections;
		
		foreach ($sections as $section) {
			$year = str_replace("Private: ", "", get_the_title($section));
			$nav .= "<a class=\"year-nav__year\" href=\"#$year\">$year</a>";
		}
		
		$nav .= "</nav></section>";
		
		echo $nav;
	}
	
	// Render the years as headers with each album inside.
	// This renders everything within the lightbox, but only loads
	// the necessary images.
	function render_albums() {
		global $sections;
		$albums = "";
		
		$galNum = 0;
		foreach ($sections as $section) {
			$year = str_replace("Private: ", "", get_the_title($section));
			$children = get_children(
				array (
					'post_parent' => $section->ID
				)
            );
            
			$albums .= "<section class=\"gallery__year\" id=\"$year\">\r\n";
			$albums .= "\t<h2 class=\"gallery-year__header\">$year</h2>\r\n";
			
			
			foreach($children as $child) {
                $id = $child->ID;
				$gallery = get_post_gallery( $id, false );
				$galIDs = explode( ",", $gallery['ids'] );

				$albums .= "\t<div class=\"gallery-year__album\">";

				$galSize = count($galIDs); 

				for($i = 0; $i < $galSize; $i++) {
					$imgID = $galIDs[$i];
					$imgSrc = wp_get_attachment_url( $imgID );

					if (empty($imgSrc) || !isset($imgSrc))
						$imgSrc = "#";

					$albums .= "\t\t<a data-rel=\"lightbox-gallery-" . $galNum . "\" href=\"" . $imgSrc . "\" class=\"album__image\">\r\n";

					if ($i === 0) {
						$imgThumb = wp_get_attachment_image_src( $imgID, 'thumbnail', true )[0]; 
						$albums .= "\t\t<img class=\"album__thumbnail\" src=" . $imgThumb . "></img>\r\n";
					}

					$albums .= "\t\t</a>\n";
				}

				$albums .= "<p class=\"album__caption\">" . str_replace( "Private: ", "", get_the_title($id) ) . "</p>\r\n";
				$albums .= "</div>\r\n";
				$galNum += 1;
				
			}
			$albums .= "</section>";
			
		}
		
		// Output the albums markup
		echo $albums;
	}
?>
    <p class="gallery__text">
        Here are all the pictures we take every year during our time in Robotics, both on-season and off-season.<br>
        Use the year nav below to jump to a specific year.
    </p>
	<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				$content = get_the_content();
	?>
		<?php render_nav(); ?>
		<?php render_albums(); ?>
	<?php
			endwhile;
		endif;
	?>
<?php get_footer(); ?>
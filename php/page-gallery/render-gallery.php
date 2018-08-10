<?php
	// Renders the entire gallery, sorting albums by year, 
	// and building a lightbox in each gallery link.
	function render_gallery($sections = array()) {
		$albums = "";
		
		$galNum = 0;
		foreach ($sections as $section) {
			$year = str_replace("Private: ", "", get_the_title($section));
			$children = get_children(
				array (
					'post_parent' => $section->ID
				)
            );
            
			$albums .= "<section class=\"grid content__section\" id=\"$year\">\r\n";
			$albums .= "\t<h2 class=\"grid__item grid__item--text-align--center\">$year</h2>\r\n";
			
			foreach($children as $child) {
                $id = $child->ID;
				$gallery = get_post_gallery( $id, false );
				$galIDs = explode( ",", $gallery['ids'] );
				$galSize = count($galIDs);

				$albums .= "\t<a class=\"grid__item grid__item--col-s--3 grid__item--col-m--3 grid__item--col-l--3\">";
			
				$imgID = $galIDs[0];
				$imgSrc = wp_get_attachment_url( $imgID );

				if (empty($imgSrc) || !isset($imgSrc))
					$imgSrc = "#";
				
				$imgThumb = wp_get_attachment_image_src( $imgID, 'thumbnail', false )[0];

				$albums .= "\t\t<img class=\"thumbnail";

				if (!isset($imgThumb)) {
					$imgThumb = get_theme_file_uri("/images/default.jpg"); // default/missing img
					$albums .= " thumbnail--default";
				}
						
				$albums .= "\" src=" . $imgThumb . "></img>\r\n";

				$albums .= "<p class=\"caption\">" . str_replace( "Private: ", "", get_the_title($id) ) . "</p>\r\n";
				$albums .= "</a>\r\n";
				$galNum += 1;	
			}

			$albums .= "</section>";
		}
		
		// Output the albums markup
		echo $albums;
	}
?>
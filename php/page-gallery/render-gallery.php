<?php
	// Renders the entire gallery, sorting albums by year, 
	// and building a lightbox in each gallery link.
	function render_gallery($sections = array()) {
		$albums = "";
		
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
				$imgIDs = explode( ",", $gallery['ids'] );
				$galSize = count($imgIDs);

				$albums .= "";
				$thumbnailClasses = array(
					"img",
					"img--round",
					"album__thumbnail"
				);
			
				$thumbID = $imgIDs[0];
				$thumbSrc = wp_get_attachment_url( $thumbID );

				if (empty($thumbSrc) || !isset($thumbSrc))
					$thumbSrc = "#";
				
				$thumbnail = wp_get_attachment_image_src( $thumbID, 'thumbnail', false )[0];
				
				if (!isset($thumbnail)) {
					$thumbnail = get_theme_file_uri("/images/default.jpg"); // default/missing img
					array_push($thumbnailClasses, "album__thumbnail--default");
				}

				$dataLightbox = $year . $id;

				$albums .= "<a href=" . wp_get_attachment_url( $imgIDs[0] ) . " data-lightbox=" . $dataLightbox . " class=\"grid__item grid__item--col-s--3 grid__item--col-m--3 grid__item--col-l--2 album\">";
				$albums .= "<img class=\"" . implode(" ", $thumbnailClasses). "\" src=" . $thumbnail . " />";
				$albums .= "<p class=\"album__title text text--align--center\">" . str_replace( "Private: ", "", get_the_title($id) ) . "</p>";
				for ($i = 1; $i < count($imgIDs); $i++) {
					$curImg = wp_get_attachment_url( $imgIDs[$i] );
					$albums .= "<a href=" . $curImg . " data-lightbox=" . $dataLightbox . " class=\"void\" />";
				}
				
				
				$albums .= "</a>";
			}

			$albums .= "</section>";
		}
		
		// Output the albums markup
		echo $albums;
	}
?>
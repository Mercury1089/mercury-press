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

				$albums .= "\t<a href=" . wp_get_attachment_url( $imgIDs[0] ) . " data-lightbox=" . $dataLightbox . " data-title=\"My caption\" class=\"grid__item grid__item--col-s--3 grid__item--col-m--3 grid__item--col-l--2 album\">";
				$albums .= "\t\t<img class=\"" . implode(" ", $thumbnailClasses). "\" src=" . $thumbnail . "></img>\r\n";
				$albums .= "<p class=\"album__title text text--align--center\">" . str_replace( "Private: ", "", get_the_title($id) ) . "</p>\r\n";
				$albums .= "</a>\r\n";

				$galNum += 1;	
			}

			$albums .= "</section>";
		}
		
		// Output the albums markup
		echo $albums;
	}
?>
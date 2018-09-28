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
			
			if ( empty($children) )
				continue;
            
			$albums .= "<section class=\"grid content__section\" id=\"{$year}\">";
			$albums .= "<h2 id=\"{$year}\" class=\"grid__item grid__item--text-align--center\">{$year}</h2>";
			
			foreach( $children as $child ) {
                $id = $child->ID;
				$gallery = get_post_gallery( $id, false );
				$imgIDs = explode( ",", $gallery['ids'] );
				$galSize = count($imgIDs);
			
				$thumbID = $imgIDs[0];

				if ( empty($thumbID) || !isset($thumbID) ) // This album has no images!
					continue;
				
				$thumbSrc = wp_get_attachment_url( $thumbID );
				$thumbnailClasses = implode(' ', array(
					"image",
					"image--round",
					"image--has-border"
				));
				$arcItemClasses = implode(' ', array(
					"archive-item",
					"container",
					"container--direction--col",
					"container--align--center",
					"grid__item",
					"grid__item--col-s--6",
					"grid__item--col-m--3",
					"grid__item--col-l--2"
				)); 
				$thumbnail = wp_get_attachment_image_src( $thumbID, 'thumbnail', false )[0];
				$thumbnailHref = wp_get_attachment_url( $imgIDs[0] );

				$dataLightbox = "{$year}{$id}";

				$albumTitle = str_replace( "Private: ", "", get_the_title($id) );
				$albumClasses = implode(' ', array(
					"album__title",
					"text",
					"text--align--center"
				));

				$albums .= "<a href=\"{$thumbnailHref}\" data-lightbox=\"{$dataLightbox}\" class=\"{$arcItemClasses}\">";
				$albums .= "<img class=\"{$thumbnailClasses}\" src=\"{$thumbnail}\" />";
				$albums .= "<h6 class=\"{$albumClasses}\">{$albumTitle}</h6>";
				
				for ($i = 1; $i < count($imgIDs); $i++) {
					$curImg = wp_get_attachment_url( $imgIDs[$i] );
					$curCap = wp_get_attachment_caption( $imgIDs[$i] );
					$albums .= "<a href=\"{$curImg}\" data-lightbox=\"{$dataLightbox}\" data-title=\"{$curCap}\" class=\"void\"></a>";
				}
				
				$albums .= "</a>";
			}

			$albums .= "</section>";
		}
		
		// Output the albums markup
		echo $albums;
	}
?>
<?php
// Split content at the more tag and return an array
function split_content() {
	global $more;
	$more = true;
	$content0 = preg_split('/<span id="more-\\d+"><\\/span>/i', get_the_content('more'));      // first <!--more--> tag gets turned into <span id="more-[number]"></span>
	$content1 = preg_split('/<!--more-->/i', $content0[1]);	// but all the remaining ones are left as <!--more-->
	$content = array_merge(array($content0[0]), $content1);	// so we have this here ugly hack
	
	for($c = 0, $csize = count($content); $c < $csize; $c++) {
		$content[$c] = apply_filters('the_content', $content[$c]);
	}
	return $content;
}
?>
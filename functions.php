<?php
/**
 * variable input for template
 */

add_shortcode('kw-header', 'kw_header');

function kw_header() { 
	if (is_page( 'page url here' )) {
		$i = 'Keyword varable here';
	} else if (is_page('secondary page url here')) {
		$i = '2nd keyword variable here';
    }
	return $i;
  }

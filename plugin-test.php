<?php 
/*
Plugin Name: Plugin Test
Plugin URI: https://github.com/woodroots/plugin-test
Version: 2.0.0
GitHub Plugin URI: https://github.com/woodroots/plugin-test
*/

function customize_footer($text) {
	$text = $text . 'これからもよろしくな。';
	return $text;
}
add_filter('admin_footer_text', 'customize_footer');

?>
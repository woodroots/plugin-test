<?php 
/*
Plugin Name: Plugin Test
Plugin URI: https://github.com/woodroots/plugin-test
Version: 1.0.0
Text Domain: plugin-test
GitHub Plugin URI: https://github.com/woodroots/plugin-test
*/

function customize_footer($text) {
	$text = $text . 'これからもよろしくな。';
	return $text;
}
add_filter('admin_footer_text', 'customize_footer');

?>
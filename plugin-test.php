<?php 
/*
Plugin Name: Plugin Test
Plugin URI: https://github.com/woodroots/plugin-test
Version: 0.2
GitHub Plugin URI: https://github.com/woodroots/plugin-test
GitHub Branch: master
*/

function customize_footer($text) {
	$text = $text . 'これからもよろしくな。';
	return $text;
}
add_filter('admin_footer_text', 'customize_footer');

?>
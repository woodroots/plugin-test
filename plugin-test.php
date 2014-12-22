<?php 
/*
Plugin Name: Plugin Test
Plugin URI: 
Description: 
Version: 0.2
Author: woodroots
Author URI: http://wood-roots.com
License: GPLv2 or later
License URI: 
GitHub Plugin URI: https://github.com/woodroots/plugin-test
GitHub Branch: master
*/

function customize_footer($text) {
	$text = $text . 'これからもよろしくな。';
	return $text;
}
add_filter('admin_footer_text', 'customize_footer');

?>
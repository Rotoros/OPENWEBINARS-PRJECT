<?php

/**
 * Plugin Name: Banner & Shortcut
 * Plugin URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * Description: 
 * Version: 1.0.0
 * Author: Gonzalo Poyatos López
 * Author URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * License: GPL2
 */

add_shortcode( "hola", function($atts, $content){
	$output = '<div style="background-color: #00FFFF; font-size: 14px; line-height: 24px; color: #070707; text-align: center; padding: 6px 18px;">AQUEST ES EL MEU SEGON PLUGION DE WP <a style="display: inline-block; background-color: #FF0000; border: 1px solid #fff; border-radius: 6px; font-size: 14px; font-weight: normal; color: #fff; padding: 3px 8px; text-decoration: none;" href="#" target="_blank">GITHUB</a></div>';
	return $output;
});
<?php

/**
 * Plugin Name: iframe & shortcode
 * Plugin URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * Description: Ifrmae with my github link
 * Version: 1.0.0
 * Author: Gonzalo Poyatos López
 * Author URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * License: GPL2
 */
add_shortcode( "mi", function($atts, $content){
	$id = $atts['id'];
	return '<div class="responsiveContent"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
});
?>
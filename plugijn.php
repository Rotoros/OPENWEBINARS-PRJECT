<?php 
/**
 * Plugin Name: JavaScript Code in the Footer
 * Plugin URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * Description: This plugin injects Javascript code at the bottom of the page
 * Version: 1.0.0
 * Author: Gonzalo Poyatos López
 * Author URI: https://github.com/Rotoros/OPENWEBINARS-PRJECT
 * License: GPL2
 */

add_action('wp_footer', function(){?>

<script>
    alert('AQUEST ÉS EL PRIMER PLUGIN QUE HE CREAT!!!')
</script>
<?php }  ,9999); ?>
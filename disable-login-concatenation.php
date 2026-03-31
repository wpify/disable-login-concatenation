<?php
/**
 * Plugin Name: Disable Login Script Concatenation
 * Description: Disables script/style concatenation on the login page so that styles load correctly when load-styles.php and load-scripts.php are blocked by the web server.
 * Version: 1.0.0
 * Author: WPify
 */

add_action( 'login_init', function () {
	global $concatenate_scripts;
	$concatenate_scripts = false;
} );

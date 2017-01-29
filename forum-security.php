<?php
/*
Plugin Name: Forum Security
Plugin URI: https://mayorsoft.eu
Description: Plugin adds security features to Wordpress based on articles on web.
Version: 1.0
Author: Martin Starosta
Author URI: https://mayorsoft.eu
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/fsp.php';


function run_forum_security() {

	$plugin = new ForumSecurity();

}
run_forum_security();


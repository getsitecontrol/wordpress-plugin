<?php
/**
 * Plugin Name: Getsitecontrol widgets
 * Plugin URI: https://getsitecontrol.com/
 * Description: Getsitecontrol popup builder — promotional and email popups, surveys and polls, contact and feedback forms.
 * Version: 3.0.0
 * Requires at least: 3.0.1
 * Tested up to: 5.7
 * Author: getsitecontrol
 * Author URI:  https://getsitecontrol.com/
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'GSC_URL' ) ) {
	define( 'GSC_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'GSC_PATH' ) ) {
	define( 'GSC_PATH', plugin_dir_path( __FILE__ ) );
}

require_once GSC_PATH . 'includes/get-site-control-wordpress.php';

GetsitecontrolWordPress::init();

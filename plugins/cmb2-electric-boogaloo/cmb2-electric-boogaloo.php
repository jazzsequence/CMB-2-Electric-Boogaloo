<?php
/**
 * Plugin Name: CMB2 - Electric Boogaloo
 * Plugin URI: https://github.com/WebDevStudios/CMB2-Example-Plugin
 * Description: An example plugin showing CMB2 fields when CMB2 is a standalone plugin
 * Version: 1.0.0
 * Author: WebDevStudios
 * Author URI: http://webdevstudios.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: cmb2-example-plugin
 */

/**
 * Silence is golden; exit if accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Load CMB2 examples
 */
require_once 'inc/local-user-avatar.php';
require_once 'inc/more-about-user.php';
require_once 'inc/user-social-media-urls.php';
require_once 'inc/additional-post-media.php';

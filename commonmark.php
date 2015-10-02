<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/sebastiandedeyne/wp-commonmark
 * @since             0.1.0
 * @package           Commonmark
 *
 * @wordpress-plugin
 * Plugin Name:       Sebdd
 * Plugin URI:        https://github.com/sebastiandedeyne/wp-commonmark
 * Description:       Basic commonmark integration in Wordpress
 * Version:           0.1.0
 * Author:            Sebastian De Deyne
 * Author URI:        https://github.com/sebastiandedeyne/
 * License:           MIT
 * Text Domain:       commonmark
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'src/admin_assets.php';
require_once 'src/commonmark.php';

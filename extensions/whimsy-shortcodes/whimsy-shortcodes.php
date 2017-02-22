<?php
/*
 * Plugin Name: Whimsy+Shortcodes
 * Version: 1.0.1
 * Plugin URI: http://www.thefanciful.com/plugins/whimsy/shortcodes
 * Description: A beautiful set of lightweight shortcodes, part of the Whimsy Framework.
 * Author: The Fanciful
 * Author URI: http://www.thefanciful.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: whimsy-sc
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author The Fanciful
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-whimsy-shortcodes.php' );

/**
 * Returns the main instance of Whimsy_Shortcodes to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Whimsy_Shortcodes
 */
function Whimsy_Shortcodes () {
	$instance = Whimsy_Shortcodes::instance( __FILE__, '1.0.1' );

	return $instance;
}

Whimsy_Shortcodes();

/**
 * Insert TinyMCE button in visual editor.
 *
 * @since  1.0.0
 */
// Hooks your functions into the correct filters
function whimsy_sc_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'whimsy_sc_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'whimsy_sc_register_mce_button' );
	}
}
add_action('admin_head', 'whimsy_sc_add_mce_button');

// Declare script for new button
function whimsy_sc_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['whimsy_sc_mce_button'] = plugin_dir_url( __FILE__ ) . 'assets/js/shortcode-tinymce-button.js';
	
	return $plugin_array;
}

// Register new button in the editor
function whimsy_sc_register_mce_button( $buttons ) {
	array_push( $buttons, 'whimsy_sc_mce_button' );
	return $buttons;
}

/**
 * Load settings JS & CSS
 * @return void
 */
function whimsy_sc_admin_styles() {
	wp_enqueue_style('whimsy-sc-admin', plugins_url('/assets/css/admin.css', __FILE__), '1.0.0');
}

add_action('admin_enqueue_scripts', 'whimsy_sc_admin_styles');
<?php
/*
 * Plugin Name: Whimsy+ | Helper
 * Version: 0.0.1
 * Plugin URI: http://www.whimsycreative.co/framework/plus
 * Description: A plugin packed with awesome features for Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7.4
 *
 * Text Domain: whimsy-plus
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Natasha Cozad
 * @since 1.0.0
 */

function whimsy_plus_colors_init() {
	if( class_exists( 'Kirki' ) ) {
		Kirki::add_config( 'whimsy_plus_colors', array( //customize config name
			'option_type' => 'theme_mod',
			'capability'  => 'edit_theme_options',
		) );

		//add fields
	}
}
add_action( 'init', 'whimsy_plus_colors_init', 50 );
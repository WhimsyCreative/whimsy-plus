<?php
/*
 * Plugin Name: Whimsy+ | Mosaic
 * Version: 0.0.1
 * Plugin URI: http://www.whimsycreative.co/framework/plus
 * Description: A plugin packed with awesome features for Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * Text Domain: whimsy-plus
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Natasha Cozad
 * @since 1.0.0
 */

function whimsy_plus_mosaic_init() {
	if( class_exists( 'Kirki' ) ) {

	}
}
add_action( 'init', 'whimsy_plus_mosaic_init', 50 );

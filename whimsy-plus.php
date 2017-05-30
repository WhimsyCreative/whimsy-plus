<?php
/*
 * Plugin Name: Whimsy+
 * Version: 0.5.0
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

	define( 'WHIMSY_PLUS_VERSION',  '0.5.0' );
	define( 'WHIMSY_PLUS_PATH', 	plugin_dir_path( __FILE__ ) );
	define( 'WHIMSY_PLUS_URI', 		plugin_dir_url( __FILE__ ) );

	// Core framework directory paths.
	define( 'WHIMSY_PLUS_ASSETS',    trailingslashit( WHIMSY_PLUS_URI . 'assets' ) );
	define( 'WHIMSY_PLUS_ADMIN',     trailingslashit( WHIMSY_PLUS_PATH . 'admin' ) );
	define( 'WHIMSY_PLUS_CUSTOMIZE', trailingslashit( WHIMSY_PLUS_PATH . 'admin/customize' ) );
	define( 'WHIMSY_PLUS_MODS',      trailingslashit( WHIMSY_PLUS_PATH . 'admin/customize/modules' ) );
	define( 'WHIMSY_PLUS_INC',       trailingslashit( WHIMSY_PLUS_PATH . 'assets/inc' ) );
	
	// Core framework directory URIs.
	define( 'WHIMSY_PLUS_IMG', trailingslashit( WHIMSY_PLUS_ASSETS . 'img' ) );
	define( 'WHIMSY_PLUS_CSS', trailingslashit( WHIMSY_PLUS_ASSETS . 'css' ) );
	define( 'WHIMSY_PLUS_JS',  trailingslashit( WHIMSY_PLUS_ASSETS . 'js'  ) );

	// Updater and licensing constants.
    define( 'WHIMSYPLUS_APP_API_URL', 'https://whimsycreative.co/index.php' );
    define( 'WHIMSYPLUS_PRODUCT_ID', 'whimsy_plus' );
    define( 'WHIMSYPLUS_INSTANCE', str_replace(array ("https://" , "http://"), "", network_site_url()) );
   
    require_once(WHIMSY_PLUS_PATH . 'updater/class-activator.php');
    require_once(WHIMSY_PLUS_PATH . 'updater/class-loader.php');
    require_once(WHIMSY_PLUS_PATH . 'updater/class-license.php');
    require_once(WHIMSY_PLUS_PATH . 'updater/class-options.php');
    require_once(WHIMSY_PLUS_PATH . 'updater/class-updater.php');
	require_once(WHIMSY_PLUS_PATH . 'class-whimsy-plus.php');
		
    global $WhimsyPlusInit;
    $WhimsyPlusInit = new WhimsyPlusInit();
	
<?php
/*
 * Plugin Name: Whimsy+
 * Version: 1.0.11
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

	define( 'WHIMSY_PLUS_VERSION', '1.0.1'            );
	define( 'WHIMSY_PLUS_PATH',      plugin_dir_path( __FILE__ )  );
	define( 'WHIMSY_PLUS_URI',       plugin_dir_url( __FILE__ )   );
	// Sets the paths to the Whimsy library.
	define( 'WHIMSY_PLUS_LIB_PATH',       trailingslashit( WHIMSY_PLUS_PATH .  'library'   ) );
	define( 'WHIMSY_PLUS_LIB_URI',        trailingslashit( WHIMSY_PLUS_URI  .   'library'  ) );
	
	// Core framework directory paths.
	define( 'WHIMSY_PLUS_ADMIN',     trailingslashit( WHIMSY_PLUS_LIB_PATH . 'admin'            ) );
	define( 'WHIMSY_PLUS_CUSTOMIZE', trailingslashit( WHIMSY_PLUS_LIB_PATH . 'admin/customize'  ) );
	define( 'WHIMSY_PLUS_INC',       trailingslashit( WHIMSY_PLUS_LIB_PATH . 'inc'              ) );
	define( 'WHIMSY_PLUS_EXT',       trailingslashit( WHIMSY_PLUS_PATH     . 'extensions'       ) );
	
	// Core framework directory URIs.
	define( 'WHIMSY_PLUS_IMG', trailingslashit( WHIMSY_PLUS_LIB_URI . 'img' ) );
	define( 'WHIMSY_PLUS_CSS', trailingslashit( WHIMSY_PLUS_LIB_URI . 'css' ) );
	define( 'WHIMSY_PLUS_JS',  trailingslashit( WHIMSY_PLUS_LIB_URI . 'js'  ) );

	// Updater and licensing constants.
    define( 'WHIMSYPLUS_APP_API_URL', 'https://whimsycreative.co/index.php');
    define( 'WHIMSYPLUS_PRODUCT_ID', 'whimsy_plus' );
    define( 'WHIMSYPLUS_INSTANCE', str_replace(array ("https://" , "http://"), "", network_site_url()) );
   
    include_once(WHIMSY_PLUS_PATH . 'updater/class-loader.php');
    include_once(WHIMSY_PLUS_PATH . 'updater/class-license.php');
    include_once(WHIMSY_PLUS_PATH . 'updater/class-options.php');
    include_once(WHIMSY_PLUS_PATH . 'updater/class-updater.php');
	include_once(WHIMSY_PLUS_PATH . 'library/class-whimsy-plus.php');
		
    global $WhimsyPlusInit;
    $WhimsyPlusInit = new WhimsyPlusInit();
	
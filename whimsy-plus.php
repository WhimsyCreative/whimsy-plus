<?php
/*
 * Plugin Name: Whimsy+
 * Version: 1.0.0
 * Plugin URI: http://www.whimsycreative.co/whimsy/extend
 * Description: A plugin loaded with new features for the Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7.2
 *
 * Text Domain: whimsy-plus
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Natasha Cozad
 * @since 1.0.0
 */

if ( !class_exists( 'WhimsyPlus' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyPlus {

		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $extend;

			/* Set up an empty class for the global $extend object. */
			$extend = new stdClass;

			/* Define framework, parent theme, and child theme constants. */
			add_action( 'init', array( $this, 'constants' ), 1 );

			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'init', array( $this, 'includes' ), 2 );
            
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function constants() {

			/* Sets the framework version number. */
			define( 'WHIMSY_PLUS_VERSION', '1.0.0'            );

			/* Sets the path to the plugin directory. */
            define( 'WHIMSY_PLUS_PATH',      plugin_dir_path( __FILE__ )  );
            
			/* Sets the url to the plugin directory. */
            define( 'WHIMSY_PLUS_URI',       plugin_dir_url( __FILE__ )   );
            
            // Sets the pathS to the Whimsy library.
			define( 'WHIMSY_PLUS_LIB_PATH',       trailingslashit( WHIMSY_PLUS_PATH .  'library'   ) );
			define( 'WHIMSY_PLUS_LIB_URI',        trailingslashit( WHIMSY_PLUS_URI  .   'library'  ) );
            
			// Core framework directory paths.
			define( 'WHIMSY_PLUS_ADMIN',     trailingslashit( WHIMSY_PLUS_LIB_PATH . 'admin'            ) );
			define( 'WHIMSY_PLUS_CUSTOMIZE', trailingslashit( WHIMSY_PLUS_LIB_PATH . 'admin/customize'  ) );
			define( 'WHIMSY_PLUS_INC',       trailingslashit( WHIMSY_PLUS_LIB_PATH . 'inc'              ) );
			define( 'WHIMSY_PLUS_EXT',       trailingslashit( WHIMSY_PLUS_PATH     . 'extensions'       ) );
            
			// Core framework directory URIs.
			define( 'WHIMSY_PLUS_CSS', trailingslashit( WHIMSY_PLUS_LIB_URI . 'css' ) );
			define( 'WHIMSY_PLUS_JS',  trailingslashit( WHIMSY_PLUS_LIB_URI . 'js'  ) );
        }
        
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
        function includes() {

			// Include Whimsy extensions.
            //require_once WHIMSY_PLUS_EXT . 'whimsy-portfolio/whimsy-portfolio.php';
            
            include_once WHIMSY_PLUS_ADMIN . 'customize/kirki/kirki.php';
            
            require_once WHIMSY_PLUS_EXT . 'whimsy-shortcodes/whimsy-shortcodes.php';
            require_once WHIMSY_PLUS_EXT . 'whimsy-customizer-colors/whimsy-customizer-colors.php';
            require_once WHIMSY_PLUS_EXT . 'whimsy-customizer-bg/whimsy-customizer-bg.php';
            require_once WHIMSY_PLUS_EXT . 'whimsy-customizer-layout/whimsy-customizer-layout.php';
            require_once WHIMSY_PLUS_LIB_PATH . 'admin/welcome.php';
            
        }
        
    }
}

new WhimsyPlus();
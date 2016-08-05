<?php
/*
 * Plugin Name: Whimsy+Extend
 * Version: 1.0.0
 * Plugin URI: http://www.thefanciful.com/plugins/whimsy/extend
 * Description: A plugin loaded with new features for the Whimsy Framework.
 * Author: The Fanciful
 * Author URI: http://www.thefanciful.com/
 * Requires at least: 4.0
 * Tested up to: 4.6
 *
 * Text Domain: whimsy-extend
 * Domain Path: /language/
 *
 * @package WordPress
 * @author The Fanciful
 * @since 1.0.0
 */

if ( !class_exists( 'WhimsyExtend' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyExtend {

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
			define( 'WHIMSY_EXTEND_VERSION', '1.0.0'            );

			/* Sets the path to the plugin directory. */
            define( 'WHIMSY_EXTEND_PATH',      plugin_dir_path( __FILE__ )  );
            
			/* Sets the url to the plugin directory. */
            define( 'WHIMSY_EXTEND_URI',       plugin_dir_url( __FILE__ )   );
            
            // Sets the pathS to the Whimsy library.
			define( 'WHIMSY_EXTEND_LIB_PATH',       trailingslashit( WHIMSY_EXTEND_PATH .  'library'   ) );
			define( 'WHIMSY_EXTEND_LIB_URI',        trailingslashit( WHIMSY_EXTEND_URI  .   'library'  ) );
            
			// Core framework directory paths.
			define( 'WHIMSY_EXTEND_ADMIN',     trailingslashit( WHIMSY_EXTEND_LIB_PATH . 'admin'            ) );
			define( 'WHIMSY_EXTEND_CUSTOMIZE', trailingslashit( WHIMSY_EXTEND_LIB_PATH . 'admin/customize'  ) );
			define( 'WHIMSY_EXTEND_INC',       trailingslashit( WHIMSY_EXTEND_LIB_PATH . 'inc'              ) );
			define( 'WHIMSY_EXTEND_EXT',       trailingslashit( WHIMSY_EXTEND_PATH     . 'extensions'       ) );
            
			// Core framework directory URIs.
			define( 'WHIMSY_EXTEND_CSS', trailingslashit( WHIMSY_EXTEND_LIB_URI . 'css' ) );
			define( 'WHIMSY_EXTEND_JS',  trailingslashit( WHIMSY_EXTEND_LIB_URI . 'js'  ) );
        }
        
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
        function includes() {

			// Include Whimsy extensions.
            require_once WHIMSY_EXTEND_EXT . 'whimsy-portfolio/whimsy-portfolio.php';
            require_once WHIMSY_EXTEND_EXT . 'whimsy-colors/whimsy-colors.php';
            require_once WHIMSY_EXTEND_EXT . 'whimsy-bg/whimsy-bg.php';
            
        }
        
    }
}

new WhimsyExtend();
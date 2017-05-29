<?php
/*
 * Plugin Name: Whimsy+ | Fonts
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

 if( !class_exists( 'WhimsyPlusFonts' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyPlusFonts {

		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $whimsyplusfonts;

			/* Set up an empty class for the global $whimsyplusfonts object. */
			$whimsyplusfonts = new stdClass;

			/* Define framework, parent theme, and child theme constants. */
			add_action( 'init', array( $this, 'constants' ), 60 );

			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'init', array( $this, 'includes' ), 60 );
            
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function constants() {

			define( 'WHIMSY_PLUS_FONTS',      trailingslashit( WHIMSY_PLUS_PATH . 'admin/customize/modules/fonts' ) );

        }
            
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
        function includes() {

            // Include Whimsy Customizer modules
            //include_once WHIMSY_PLUS_FONTS . 'partials/advanced.php';
            include_once WHIMSY_PLUS_FONTS . 'partials/global.php';
            include_once WHIMSY_PLUS_FONTS . 'partials/header.php';
            //include_once WHIMSY_PLUS_FONTS . 'partials/menu.php';
            //include_once WHIMSY_PLUS_FONTS . 'partials/posts.php';
            //include_once WHIMSY_PLUS_FONTS . 'partials/sidebar.php';
            //include_once WHIMSY_PLUS_FONTS . 'partials/footer.php';
			
            //include_once WHIMSY_PLUS_FONTS . 'partials/mosaic.php';
            //include_once WHIMSY_PLUS_FONTS . 'partials/forms.php';
            
        }
        
    }
}

global $WhimsyPlusFonts;
$WhimsyPlusFonts = new WhimsyPlusFonts();
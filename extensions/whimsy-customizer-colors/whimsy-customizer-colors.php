<?php
/*
 * Plugin Name: Whimsy: Customizer Colors
 * Version: 1.0.0
 * Plugin URI: http://www.whimsycreative.co/extend
 * Description: A plugin that adds more color options to Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7
 *
 * Text Domain: whimsy-customizer-colors
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Whimsy Creative Co.
 * @since 1.0.0
 */

if ( !class_exists( 'WhimsyCustomizerColors' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyCustomizerColors {
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $WhimsyCustomizerColors;

			/* Set up an empty class for the global $whimsy object. */
			$WhimsyCustomizerColors = new stdClass;

			/* Define Whimsy+Skins constants. */
			add_action( 'init', array( $this, 'constants' ), 1 );
            
			/* Load the settings and controls for the Customizer. */
            add_action( 'customize_register', array( $this, 'customize' ), 40 );
            
			/* Enqueue necessary scripts and CSS files for the skins . */
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 45 );
            
			/* Enqueue necessary scripts and CSS files for the skins . */
            add_action( 'wp_enqueue_scripts', array( $this, 'style' ), 115 );
            
        }
   
		/**
		 * @since  0.7.0
		 * @access public
		 * @return void
		 */
		function constants() {

			/* Sets the framework version number. */
			define( 'WHIMSY_COLORS_VERSION', '1.0.0' );
            
        }
        
        function customize ( $wp_customize ) {
                        
			// Include customizer settings and controls for Colors.
            require_once plugin_dir_path( __FILE__ ) . 'whimsy-customizer-colors-admin.php' ;
            
        }
        
        /**
         * Include additional styles when in admin.
         */
        function enqueue() {

            // Enqueue live preview js.
            wp_enqueue_script( 'whimsy-customizer-colors', plugin_dir_url( __FILE__ ) . 'js/customizer-colors.js', array( 'customize-preview' ), '1.0', true );
            
            // Enqueue custom stylesheet
            wp_enqueue_style( 'whimsy-customizer-colors', plugin_dir_url( __FILE__ ) . 'css/customizer-colors.css', array(), '1.0', true );

        }

        /**
         * Insert Customizer styles.
         */
        function style() {
            
            require_once plugin_dir_path( __FILE__ ) . 'whimsy-customizer-colors-css.php' ;
            
        }
        
    }
}

new WhimsyCustomizerColors();
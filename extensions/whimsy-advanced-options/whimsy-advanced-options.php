<?php
/*
 * Plugin Name: Whimsy: Advanced Options
 * Version: 0.1.1
 * Plugin URI: http://www.whimsycreative.co/framework/plus
 * Description: A plugin that adds more color options to Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7
 *
 * Text Domain: whimsy-advanced-options
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Whimsy Creative Co.
 * @since 1.0.0
 */

if ( !class_exists( 'WhimsyAdvanced' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyAdvanced {
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $WhimsyAdvanced;

			/* Set up an empty class for the global $WhimsyAdvanced object. */
			$WhimsyAdvanced = new stdClass;

			/* Define Whimsy constants. */
			add_action( 'init', array( $this, 'constants' ), 10 );
            
			/* Remove actions hooked from conflicting plugins or themes. */
			add_action( 'init', array( $this, 'unhook' ), 100 );
            
			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'init', array( $this, 'includes' ), 200 );
            
			/* Load the settings and controls for the Customizer. */
            add_action( 'customize_register', array( $this, 'customize' ), 40 );
            
			/* Enqueue necessary scripts and CSS files for the skins . */
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 45 );
            
			/* Setup things for outputing styles . */
            add_action( 'wp_enqueue_scripts', array( $this, 'style' ), 115 );
            
            
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function constants() {

			/* Sets the plugin version number. */
			define( 'WHIMSY_ADVANCED_VERSION',   '0.1.1' );

			/* Sets the path to the plugin directory. */
            define( 'WHIMSY_ADVANCED_PATH',      plugin_dir_path( __FILE__ )  );
            
			/* Sets the url to the plugin directory. */
            define( 'WHIMSY_ADVANCED_URI',       plugin_dir_url( __FILE__ )  );
                    
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function unhook() {
            
			// Access Whimsy Framework
            global $whimsy;
            
			// Remove Customizer styles from Whimsy Framework.
            remove_action('wp_head', 'whimsy_customizer_styles', 100);
            remove_action( 'whimsy_header', 'whimsy_get_header', 10 );


        }
        
        function customize ( $wp_customize ) {
                        
			// Include customizer settings and controls for Colors.
            require_once WHIMSY_ADVANCED_PATH . 'whimsy-advanced-options-admin.php' ;
            
        }
        
        /**
         * Include additional styles when in admin.
         */
        function enqueue() {

            // Enqueue live preview js.
            wp_enqueue_script( 'whimsy-advanced-options', WHIMSY_ADVANCED_URI . 'js/advanced-options.js', array( 'customize-preview' ), WHIMSY_ADVANCED_VERSION , true );
            
            // Enqueue custom stylesheet
            wp_enqueue_style( 'whimsy-advanced-options', WHIMSY_ADVANCED_URI . 'css/advanced-options.css', array(), WHIMSY_ADVANCED_VERSION, true );
            
        }

        /**
         * Insert Customizer styles.
         */
        function style() {
                        
            // Include Global Colors.
            //require_once WHIMSY_ADVANCED_PATH . 'inc/inline-styles/global.php' ;

        }
        
        
        function includes() {

            /**
             * Custom functions that act independently of the theme templates.
             */
            
            require_once WHIMSY_ADVANCED_PATH . 'inc/whimsy-get-header.php';
            add_action( 'whimsy_header', 'whimsy_get_advanced_header', 100 );
            
        }
    
    }
}

new WhimsyAdvanced();
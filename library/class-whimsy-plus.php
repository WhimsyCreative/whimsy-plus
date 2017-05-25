<?php
/*
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
        
			global $whimsyplus;

			/* Set up an empty class for the global $whimsyplus object. */
			$whimsyplus = new stdClass;

			/* Define framework, parent theme, and child theme constants. */
			add_action( 'init', array( $this, 'constants' ), 1 );

			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'init', array( $this, 'includes' ), 2 );
            
			/* Load the settings and controls for the Customizer. */
            add_action( 'customize_register', array( $this, 'customize' ), 40 );
            
			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'after_setup_theme', array( $this, 'unhook' ), 400 );
            
			/* Enqueue necessary scripts and CSS files for the skins . */
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 200 );
            
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function constants() {
            

			// Sets the paths to the Whimsy Updater 
        }
            
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
        function includes() {
			
            // Include Whimsy Customizer extensions
            include_once WHIMSY_PLUS_CUSTOMIZE . 'kirki/kirki.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'config.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'panels.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'sections.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'colors.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'fonts.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'layout.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'header.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'menu.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'content.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'sidebar.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'footer.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'mosaic.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'forms.php';
            include_once WHIMSY_PLUS_CUSTOMIZE . 'advanced.php';

            // Include Whimsy Framework modifications
            include_once WHIMSY_PLUS_INC . 'whimsy-header.php';
            include_once WHIMSY_PLUS_INC . 'whimsy-footer.php';

            // Include advanced extensions
            include_once WHIMSY_PLUS_INC . 'sharing.php';
            include_once WHIMSY_PLUS_INC . 'twitter-mentions.php';

            // Remove Whimsy Framework actions
            remove_action( 'init', 'whimsy_customize_style_output', 5 );
            
			// Include admin functions
            if ( is_admin() ) {
                include_once WHIMSY_PLUS_ADMIN . 'admin.php';
            } 
            
        }
        
        /**
         * Updates to Whimsy Framework functions.
         */
        function unhook() {

            remove_action( 'customize_preview_init', 'whimsy_customize_preview_js', 10 );

        }
            
        /**
         * Updates to the Whimsy Framework Customizer.
         */
        function customize ( $wp_customize ) {
                        
            // Clear out the original Whimsy Framework section to make way for new stuff.
            $wp_customize->remove_section( 'colors' );
            $wp_customize->remove_section( 'header_image' );
            $wp_customize->remove_control( 'display_header_text' );
            $wp_customize->remove_control( 'whimsy_framework_logo_center' );
            
        }
        
        /**
         * Include additional styles when in admin.
         */
        function enqueue() {

            // Enqueue live preview js.
            //wp_enqueue_script( 'whimsy-plus', WHIMSY_PLUS_JS . 'whimsy-plus.js', array( 'customize-preview' ), WHIMSY_PLUS_VERSION , true );
            
            // Enqueue custom stylesheet
            wp_enqueue_style( 'whimsy-plus', WHIMSY_PLUS_CSS . 'whimsy-plus.css', array('whimsy-style'), WHIMSY_PLUS_VERSION );
            

        }
    }
}
<?php
/*
 * Plugin Name: Whimsy+ | Helper Class
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

 if ( !class_exists( 'WhimsyPlusHelper' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyPlusHelper {

		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $WhimsyPlusHelper;

			/* Set up an empty class for the global $WhimsyPlusHelper object. */
			$WhimsyPlusHelper = new stdClass;
			
			/* Load the core functions/classes required by the rest of the framework. */
			add_action( 'init', array( $this, 'includes' ), 1 );

			/* Define fields for the Customizer. */
			add_action( 'init', array( $this, 'fields' ), 50 );
            
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
				
		function fields() {
			if( class_exists( 'Kirki' ) ) {
				/* Layout */

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'slider',
					'settings'    => 'layout_size',
					'label'       => __( 'Site Width', 'whimsy-plus' ),
					'description' => __( 'Set the width of the whole body of the site in %.', 'whimsy-plus' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => '100',
					'priority'    => 1,
					'output'      => array(
						array(
							'element'  => '#page',
							'units'    => '%',
							'property' => 'width',
						),
					),
					'transport'   => 'auto',
					'js_vars'     => array(
						array(
							'element'  => '#page',
							'property' => 'width',
							'units'    => '%',
							'function' => 'css',
						),
					),
				) );

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'radio-image',
					'settings'    => 'whimsy_framework_layout',
					'label'       => __( 'Global Layout', 'whimsy-plus' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => 'content-sidebar',
					'priority'    => 10,
					'choices'     => array(
						'sidebar-content'   => get_template_directory_uri() . '/library/img/sidebar-content.png',
						'full-width' => get_template_directory_uri() . '/library/img/full-width.png',
						'content-sidebar'  => get_template_directory_uri() . '/library/img/content-sidebar.png',
					),
				) );

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'toggle',
					'settings'    => 'box_layout',
					'label'       => __( 'Enable Box-Style layout?', 'whimsy-plus' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => false,
					'priority'    => 10,
				) );

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'background',
					'settings'    => 'boxed_website_background',
					'label'       => __( 'Boxed Layout Content Background', 'kirki' ),
					'description' => __( 'Content area background for boxed layout.', 'kirki' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => array(
						'background-color'    => '#ffffff',
						'background-image'    => '',
						'background-repeat'   => 'no-repeat',
						'background-size'     => 'cover',
						'background-attach'   => 'fixed',
						'background-position' => 'left-top',
						'background-opacity'  => 90,
					),
					'priority'		 => 10,
					'active_callback'  => array(
						array(
						'setting'  => 'box_layout',
						'operator' => '==',
						'value'    => true
						),
					),
					'output'		 => array(
						array(
							'element' => '#page',
						),
					),
				) );
				// Kirki::add_field( 'whimsy_plus', array(
				// 	'type'        => 'color',
				// 	'settings'    => 'color_box_bg',
				// 	'label'       => __( 'Box Background Color', 'whimsy-plus' ),
				// 	'section'     => 'whimsy_plus_layout',
				// 	'default'     => '#ffffff',
				// 	'priority'    => 11,
				// 	'choices'     => array(
				// 		'alpha' => true,
				// 	),
				// 	'active_callback'  => array(
				// 		array(
				// 		'setting'  => 'box_layout',
				// 		'operator' => '==',
				// 		'value'    => true
				// 		),
				// 	),
				// 	'output'      => array(
				// 		array(
				// 			'element'  => '#page',
				// 			'property' => 'background-color',
				// 		),
				// 	),
				// 	'transport'   => 'postMessage',
				// 	'js_vars'     => array(
				// 		array(
				// 			'element'  => '#page',
				// 			'function' => 'css',
				// 			'property' => 'background-color',
				// 		),
				// 	),
				// ) );

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'dimension',
					'settings'    => 'box_layout_margin',
					'label'       => __( 'Margin', 'whimsy-plus' ),
					'description' => __( 'This controls how much blank space is between the sides of the browser window and your content.', 'whimsy-plus' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => '0 auto',
					'priority'    => 13,
					'active_callback'  => array(
						array(
						'setting'  => 'box_layout',
						'operator' => '==',
						'value'    => true
						),
					),
					'output'      => array(
						array(
							'element'  => '#page',
							'property' => 'margin',
						),
					),
					'transport'   => 'postMessage',
					'js_vars'     => array(
						array(
							'element'  => '#page',
							'property' => 'margin',
							'function' => 'css',
						),
					),
				) );

				Kirki::add_field( 'whimsy_plus', array(
					'type'        => 'dimension',
					'settings'    => 'box_layout_border_radius',
					'label'       => __( 'Border Radius', 'whimsy-plus' ),
					'description' => __( 'This will curve the corners of the box layout.', 'whimsy-plus' ),
					'section'     => 'whimsy_plus_layout',
					'default'     => '0',
					'priority'    => 14,
					'active_callback'  => array(
						array(
						'setting'  => 'box_layout',
						'operator' => '==',
						'value'    => true
						),
					),
					'output'      => array(
						array(
							'element'  => '#page',
							'property' => 'border-radius',
						),
					),
					'transport'    => 'postMessage',
					'js_vars'      => array(
						array(
							'element'  => '#page',
							'property' => 'border-radius',
							'function' => 'css',
						),
					)
				) );
				
			}
		}
        
        /**
         * Include additional styles when in admin.
         */
        function enqueue() {

            // $whimsy_framework_layout = get_theme_mod( 'whimsy_framework_layout' );
            
            // if ( $whimsy_framework_layout  == 'sidebar-content' ) {
            //     wp_enqueue_style( 'whimsy-layout-sidebar-content', WHIMSY_CSS . 'layouts/sidebar-content.css' );
            // }
            // if ( $whimsy_framework_layout  == 'full-width' ) {
            //     wp_enqueue_style( 'whimsy-layout-full-width', WHIMSY_CSS . 'layouts/full-width.css' );
            // }
		}
            
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
        function includes() {
			
    		//require_once WHIMSY_PLUS_CUSTOMIZE . 'kirki/kirki.php';
            
			// Include admin functions
            //if ( is_admin() ) { include_once WHIMSY_PLUS_ADMIN . 'class-whimsy-plus-.php'; } 
            
        }
        
        /**
         * Updates to Whimsy Framework functions.
         */
        function unhook() {

            //remove_action( 'customize_preview_init', 'whimsy_customize_preview_js', 10 );

        }
            
        /**
         * Updates to the Whimsy Framework Customizer.
         */
        function customize ( $wp_customize ) {
                        
            // Clear out the original Whimsy Framework section to make way for new stuff.
            //$wp_customize->remove_section( 'colors' );
            
        }
    }
}

$WhimsyPlusHelper = new WhimsyPlusHelper();
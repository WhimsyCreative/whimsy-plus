<?php
/*
 * Plugin Name: Whimsy+ | Sidebar
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

function whimsy_plus_sidebar_init() {
	if( class_exists( 'Kirki' ) ) {

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'sidebar_widget_spacing',
			'label'       => __( 'Widget Spacing', 'whimsy-plus' ),
			'tooltip' => __( 'Set the margin for .widget.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_sidebar',
			'default'     => array(
				'top'    => '0',
				'bottom' => '1.5em',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.widget',
					'property' => 'margin',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.widget',
					'property' => 'margin',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'sidebar_widget_spacing_padding',
			'label'       => __( 'Widget Padding', 'whimsy-plus' ),
			'tooltip' => __( 'Set the padding of widget.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_sidebar',
			'default'     => array(
				'top'    => '0',
				'bottom' => '0',
				'left'   => '0',
				'right'  => '0',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '.widget',
					'property' => 'padding',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.widget',
					'property' => 'padding',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'color',
			'settings'    => 'whimsy_plus_sidebar_widget_bg_color',
			'label'       => __( 'Widget Background Color', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_sidebar',
			'priority'    => 10,
			'default'     => '#f8f8f8',
			'choices'     => array(
				'alpha' => true,
			),
			'output'      => array(
				array(
					'element'  => '.widget',
					'property' => 'background-color'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '.widget',
					'property' => 'background-color',
					'function' => 'css',
				),
			)
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'dimension',
			'settings'    => 'whimsy_plus_sidebar_widget_border_radius',
			'label'       => __( 'Border Radius', 'whimsy-plus' ),
			'description' => __( 'This will curve the corners of .widget.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_sidebar',
			'default'     => '0',
			'priority'    => 14,
			'output'      => array(
				array(
					'element'  => '.widget',
					'property' => 'border-radius',
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '.widget',
					'property' => 'border-radius',
					'function' => 'css',
				),
			)
		) );
	}
}
add_action( 'init', 'whimsy_plus_sidebar_init', 50 );
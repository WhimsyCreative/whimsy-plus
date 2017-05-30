<?php
/*
 * Plugin Name: Whimsy+ | Helper
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

function whimsy_plus_header_init() {
	if( class_exists( 'Kirki' ) ) {

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'dimension',
			'settings'    => 'whimsy_plus_header_desktop_logo_size',
			'label'       => __( 'Desktop Logo Width', 'whimsy-plus' ),
			'description' => __( 'Change the width of your logo on large screens.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => '400px',
			'priority'    => 11,
			'output'      => array(
				array(
					'element'  => '#desktop-site-logo img',
					'property' => 'width',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#desktop-site-logo img',
					'property' => 'width',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'dimension',
			'settings'    => 'whimsy_plus_header_mobile_logo_size',
			'label'       => __( 'Mobile Logo Width', 'whimsy-plus' ),
			'description' => __( 'Change the width of your logo on large screens.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => '200px',
			'priority'    => 25,
			'output'      => array(
				array(
					'element'  => '#mobile-site-logo img',
					'property' => 'width',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#mobile-site-logo img',
					'property' => 'width',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'dimension',
			'settings'    => 'header_as_bg_width',
			'label'       => __( 'Header Width', 'whimsy-plus' ),
			'help'        => __( 'Specify width of your header in %, px, vw, or em.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => '100%',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'width',
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'width',
					'function' => 'css',
				),
			)
		) );

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'slider',
			'settings'    => 'header_as_bg_height',
			'label'       => __( 'Header Height', 'whimsy-plus' ),
			'help'        => __( 'Use the height of your header image.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => '300',
			'choices'     => array(
				'min'  => '0',
				'max'  => '800',
				'step' => '1',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'height',
					'units'    => 'px',
					'media_query' => '@media screen and (min-width: 980px)',
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'height',
					'units'    => 'px',
					'function' => 'css',
				),
			)
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'toggle',
			'settings'    => 'whimsy_plus_header_desktop_logo_center',
			'label'       => __( 'Center desktop logo?', 'whimsy-plus' ),
			'section'     => 'title_tagline',
			'default'     => true,
			'priority'    => 11,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'whimsy_plus_header_desktop_logo_padding',
			'label'       => __( 'Desktop Logo Padding', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => array(
				'top'    => '1.5em',
				'bottom' => '1.5em',
				'left'    => '0',
				'right' => '0',
			),
			'priority'    => 20,
			'output'      => array(
				array(
					'element'  => '#masthead',
					'property' => 'padding',
					'media_query' => '@media screen and (min-width: 980px)',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#masthead',
					'property' => 'padding',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'toggle',
			'settings'    => 'header_as_bg',
			'label'       => __( 'Add a background to the header?', 'whimsy-plus' ),
			'help'        => __( 'The image will be used as a full-screen background, placed behind the menus and titles.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => 0,
			'priority'    => 30,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'image',
			'settings'    => 'header_background_image',
			'label'       => __( 'Header Background Image', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => '',
			'priority'    => 30,
			'active_callback'    => array(
				array(
					'setting'  => 'header_as_bg',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-image'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-image',
					'function' => 'css',
				),
			)
		) );

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'header_as_bg_size',
			'label'       => __( 'Background-Size', 'whimsy-plus' ),
			'description' => __( 'This controls how the background is sized.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => 'cover',
			'priority'    => 30,
			'choices'     => array(
				'normal'    => __( 'Normal', 'whimsy-plus' ),
				'contain'   => __( 'Contain', 'whimsy-plus' ),
				'cover'     => __( 'Cover', 'whimsy-plus' ),
				'100%'    => __( '100%', 'whimsy_plus' )
			),
			'active_callback'    => array(
				array(
					'setting'  => 'header_as_bg',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-size'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-size',
					'function' => 'css',
				),
			)
		) );

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'header_as_bg_position',
			'label'       => __( 'Background-Position', 'whimsy-plus' ),
			'description' => __( 'This controls where the background is positioned.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => 'center center',
			'priority'    => 30,
			'choices'     => array(
				'center top'        => __( 'center top', 'whimsy-plus' ),
				'center center'     => __( 'center center', 'whimsy-plus' ),
				'center bottom'     => __( 'center bottom', 'whimsy-plus' ),
				'left top'          => __( 'left top', 'whimsy-plus' ),
				'left center'       => __( 'left center', 'whimsy-plus' ),
				'left bottom'       => __( 'left bottom', 'whimsy-plus' ),
				'right top'         => __( 'right top', 'whimsy-plus' ),
				'right center'      => __( 'right center', 'whimsy-plus' ),
				'right bottom'      => __( 'right bottom', 'whimsy-plus' ),
			),
			'active_callback'    => array(
				array(
					'setting'  => 'header_as_bg',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-position'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-position',
					'function' => 'css',
				),
			)
		) );

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'radio-buttonset',
			'settings'    => 'header_as_bg_attachment',
			'label'       => __( 'Background-Attachment', 'whimsy-plus' ),
			'description' => __( 'This can be used to create a paralax effect.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_header',
			'default'     => 'scroll',
			'priority'    => 30,
			'choices'     => array(
				'scroll'    => __( 'scroll', 'whimsy-plus' ),
				'fixed'   => __( 'fixed', 'whimsy-plus' ),
				'initial'     => __( 'initial', 'whimsy-plus' ),
			),
			'active_callback'    => array(
				array(
					'setting'  => 'header_as_bg',
					'operator' => '==',
					'value'    => 1,
				),
			),
			'output'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-attachment'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '#header-container',
					'property' => 'background-attachment',
					'function' => 'css',
				),
			)
		) );
		
	}
}
add_action( 'init', 'whimsy_plus_header_init', 50 );
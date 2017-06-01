<?php
/*
 * Plugin Name: Whimsy+ | Posts & Pages
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

function whimsy_plus_content_init() {
	if( class_exists( 'Kirki' ) ) {

		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'toggle',
			'settings'    => 'whimsy_framework_hide_page_date',
			'label'       => __( 'Show page date?', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => true,
			'priority'    => 10,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'toggle',
			'settings'    => 'whimsy_framework_hide_page_title_link',
			'label'       => __( 'Show link on page titles?', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => true,
			'priority'    => 10,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'toggle',
			'settings'    => 'whimsy_framework_hide_page_comments',
			'label'       => __( 'Show comments on pages?', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => true,
			'priority'    => 10,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'slider',
			'settings'    => 'content_container_size',
			'label'       => __( 'Content Container Width', 'whimsy-plus' ),
			'tooltip' => __( 'Set the width of #content-container.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => '100',
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '#content-container',
					'units'    => '%',
					'property' => 'max-width',
					'media_query' => '@media screen and (min-width: 980px)',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#content-container',
					'property' => 'max-width',
					'units'    => '%',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'content_container_spacing',
			'label'       => __( 'Content Container Spacing', 'whimsy-plus' ),
			'tooltip' => __( 'Set the margin for #content-container.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => array(
				'top'    => '0',
				'bottom' => '0',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '#content-container',
					'property' => 'margin',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#content-container',
					'property' => 'margin',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'content_spacing_padding',
			'label'       => __( 'Content Spacing', 'whimsy-plus' ),
			'tooltip' => __( 'Set the padding of #content.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => array(
				'top'    => '2em',
				'bottom' => '2em',
				'left'   => '0',
				'right'  => '0',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element'  => '#content',
					'property' => 'padding',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '#content',
					'property' => 'padding',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'custom',
			'settings'    => 'whimsy_plus_posts_divider',
			'section'     => 'whimsy_plus_content',
			'default'     => '<div class="customize-divider">' . esc_html__( 'Posts', 'whimsy-plus' ) . '</div>',
			'priority'    => 30,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'color',
			'settings'    => 'whimsy_plus_post_bg_color',
			'label'       => __( 'Post Background Color', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'priority'    => 30,
			'choices'     => array(
				'alpha' => true,
			),
			'output'      => array(
				array(
					'element'  => '.post',
					'property' => 'background-color'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '.post',
					'property' => 'background-color',
					'function' => 'css',
				),
			)
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'post_spacing_margin',
			'label'       => __( 'Post Spacing', 'whimsy-plus' ),
			'tooltip' => __( 'Set the margin of .post.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => array(
				'top'    => '0',
				'bottom' => '0',
			),
			'priority'    => 30,
			'output'      => array(
				array(
					'element'  => '.post',
					'property' => 'margin',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.post',
					'property' => 'margin',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'custom',
			'settings'    => 'whimsy_plus_mosaic_divider',
			'section'     => 'whimsy_plus_content',
			'default'     => '<div class="customize-divider">' . esc_html__( 'Mosaic', 'whimsy-plus' ) . '</div>',
			'priority'    => 40,
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'color',
			'settings'    => 'whimsy_plus_post_mosaic_bg_color',
			'label'       => __( 'Mosaic Background Color', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'priority'    => 40,
			'choices'     => array(
				'alpha' => true,
			),
			'output'      => array(
				array(
					'element'  => '.brick',
					'property' => 'background-color'
				),
			),
			'transport'    => 'postMessage',
			'js_vars'      => array(
				array(
					'element'  => '.brick',
					'property' => 'background-color',
					'function' => 'css',
				),
			)
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'post_mosaic_spacing_margin',
			'label'       => __( 'Mosaic Spacing', 'whimsy-plus' ),
			'tooltip' => __( 'Set the margin of .brick.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => array(
				'top'    => '0',
				'bottom' => '0',
			),
			'priority'    => 40,
			'output'      => array(
				array(
					'element'  => '.brick',
					'property' => 'margin',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.brick',
					'property' => 'margin',
					'function' => 'css',
				),
			),
		) );
		Kirki::add_field( 'whimsy_plus', array(
			'type'        => 'spacing',
			'settings'    => 'post_mosaic_spacing_padding',
			'label'       => __( 'Mosaic Padding', 'whimsy-plus' ),
			'tooltip' => __( 'Set the padding of .brick.', 'whimsy-plus' ),
			'section'     => 'whimsy_plus_content',
			'default'     => array(
				'top'     => '0',
				'bottom'  => '0',
				'left'    => '0',
				'right'   => '0',
			),
			'priority'    => 40,
			'output'      => array(
				array(
					'element'  => '.brick',
					'property' => 'padding',
				),
			),
			'transport'   => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.brick',
					'property' => 'padding',
					'function' => 'css',
				),
			),
		) );
	}
}
add_action( 'init', 'whimsy_plus_content_init', 50 );
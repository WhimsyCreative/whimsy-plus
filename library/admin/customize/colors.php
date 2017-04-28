<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_global_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Global Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_body_link',
	'label'       => __( 'Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#52b0c1',
	'priority'    => 11,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => 'a, a:visited, ul.whimsy-nav li a:hover, ul.whimsy-nav li a:focus, .entry-title a',
            'property' => 'color',
            'function' => 'css',
        ),
        array(
            'element'  => 'a.btn-shortcode, button, input[type="button"], input[type="reset"], input[type="submit"], #infinite-handle span',
            'property' => 'border-color',
            'function' => 'css',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'a, a:visited,ul.whimsy-nav li a:hover, ul.whimsy-nav li a:focus, .entry-title a',
            'property' => 'color',
            'function' => 'css',
        ),
        array(
            'element'  => 'a.btn-shortcode, button, input[type="button"], input[type="reset"], input[type="submit"], #infinite-handle span',
            'property' => 'border-color',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_accent_color',
	'label'       => __( 'Accent Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#333333',
	'priority'    => 12,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '::selection,.collapse-button:hover, .collapse-button:focus',
            'property' => 'background'
        ),
        array(
            'element'  => 'a.btn-shortcode:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #infinite-handle span:hover',
            'property' => 'border-color'
        ),
    ),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => '::selection,.collapse-button:hover, .collapse-button:focus',
            'property' => 'background',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_body_link_hover',
	'label'       => __( 'Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#333333',
	'priority'    => 11,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => 'a:hover, a:focus, a:active, .collapse-button, #site-navigation ul.sub-menu a:hover, ul.whimsy-nav li a, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #infinite-handle span:hover,.entry-posted-on a:hover,.entry-posted-on a:focus,.entry-posted-on a:active',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'a:hover, a:focus, a:active, .collapse-button, #site-navigation ul.sub-menu a:hover, ul.whimsy-nav li a, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #infinite-handle span:hover,
.entry-posted-on a:hover,.entry-posted-on a:focus,.entry-posted-on a:active',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_body_link_active',
	'label'       => __( 'Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#aaaaaa',
	'priority'    => 12,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => 'a:active,a:focus',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'a:active,a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_page_bg_color',
	'label'       => __( 'Body Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 10,
    'default'     => '#f8f8f8',
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'body',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_color_header_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Header Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_header_bg_color',
	'label'       => __( 'Header Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_color_posts_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Post & Page Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_content_container_bg_color',
	'label'       => __( 'Content Container Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#content-container',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#content-container',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_color_sidebar_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Sidebar Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_sidebar_bg_color',
	'label'       => __( 'Sidebar Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#secondary',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#secondary',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_sidebar_widget_link',
	'label'       => __( 'Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#52b0c1',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '.widget a, .widget a:visited',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.widget a, .widget a:visited',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_sidebar_widget_link_hover',
	'label'       => __( 'Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#333333',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '.widget a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.widget a:hover',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_sidebar_widget_link_active',
	'label'       => __( 'Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#aaaaaa',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '.widget a:active,.widget a:focus',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.widget a:active,.widget a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_color_footer_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Footer Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_footer_bg_color',
	'label'       => __( 'Footer Container Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#footer-container',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#footer-container',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );
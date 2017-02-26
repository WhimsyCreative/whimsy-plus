<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_link_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Link Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_body_link',
	'label'       => __( 'Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'default'     => '#52b0c1',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => 'a, a:visited',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'a, a:visited',
            'property' => 'color',
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
            'element'  => 'a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'a:hover',
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
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_bg_colors_divider',
	'section'     => 'whimsy_plus_colors',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Background Colors', 'whimsy-plus' ) . '</div>',
	'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_page_bg_color',
	'label'       => __( 'Body Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
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
	'type'        => 'color',
	'settings'    => 'whimsy_plus_header_bg_color',
	'label'       => __( 'Header Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_colors',
	'priority'    => 20,
    'default'     => '#f8f8f8',
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
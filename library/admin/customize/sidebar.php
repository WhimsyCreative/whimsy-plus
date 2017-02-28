<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */
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
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_sidebar_widget_link',
	'label'       => __( 'Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar',
	'default'     => '#52b0c1',
	'priority'    => 10,
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
	'section'     => 'whimsy_plus_sidebar',
	'default'     => '#333333',
	'priority'    => 11,
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
	'section'     => 'whimsy_plus_sidebar',
	'default'     => '#aaaaaa',
	'priority'    => 12,
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
/* Sidebar Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_title_font',
	'label'       => __( 'Widget Title Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget-title.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '0.8em',
		'line-height'    => '1.5',
		'letter-spacing' => '1px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#aaaaaa',
		'text-transform' => 'uppercase',
		'text-align'     => 'left'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => 'h1.widget-title',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'h1.widget-title',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_text_font',
	'label'       => __( 'Widget Text', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '2',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => '.widget',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
			'element' => '.widget',
        ),
    ),
) );
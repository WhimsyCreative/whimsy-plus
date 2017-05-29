<?php

/* Sidebar Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_title_font',
	'label'       => __( 'Widget Title Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget-title.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar_fonts',
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
			'element' => 'h1.widget-title, #wp-calendar caption, .widget h3',
		),
	),
    'transport'    => 'auto',
    'js_vars'      => array(
        array(
            'element'  => 'h1.widget-title, #wp-calendar caption, .widget h3',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_text_font',
	'label'       => __( 'Widget Text', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar_fonts',
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
    'transport'    => 'auto',
    'js_vars'      => array(
        array(
			'element' => '.widget',
        ),
    ),
) );
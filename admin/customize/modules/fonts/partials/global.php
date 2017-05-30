<?php
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'typography',
	'settings'    => 'whimsy_plus_body_font',
	'label'       => __( 'Body Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the body text.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '18px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body','button','input','select','textarea',
		),
	),
    'transport'   => 'refresh',
    'js_vars'     => array(
        array(
			'element' => 'body','button','input','select','textarea',
            'function' => 'css',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h1_font',
	'label'       => __( 'H1 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H1 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.8em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h1',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h1',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h2_font',
	'label'       => __( 'H2 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H2 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.7em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h2',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h2',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h3_font',
	'label'       => __( 'H3 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H3 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.5em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h3',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h3',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h4_font',
	'label'       => __( 'H4 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H4 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.2em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h4',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h4',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h5_font',
	'label'       => __( 'H5 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H5 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h5',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h5',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_h6_font',
	'label'       => __( 'H6 Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the H6 headings.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_global_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h6',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'element'  => 'h6',
        ),
    ),
) );

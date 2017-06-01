<?php

/* Footer Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_text_font',
	'label'       => __( 'Footer Text', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for #colophon.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_footer_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '2',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => '#colophon',
		),
	),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
			'element' => '#colophon',
        ),
    ),
) );

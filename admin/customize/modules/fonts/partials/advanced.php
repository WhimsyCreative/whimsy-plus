<?php

/* Advanced Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_social_sharing_font',
	'label'       => __( 'Social Sharing Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .social-sharing-title.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_advanced',
    'active_callback'  => array(
        array(
        'setting'  => 'whimsy_plus_add_social_sharing_icons',
        'operator' => '==',
        'value'    => true
        ),
    ),
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'normal',
		'font-size'      => '0.8em',
		'line-height'    => '1.5',
		'letter-spacing' => '1px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.social-sharing-title',
		),
	),
    'transport'    => 'auto',
    'js_vars'      => array(
        array(
            'element'  => '.social-sharing-title',
        ),
    ),
) );
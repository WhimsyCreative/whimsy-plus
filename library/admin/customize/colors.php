<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

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
            'element'  => 'a:hover',
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
<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'basic_text_color',
    'label'       => __( 'Text Color', 'whimsy-plus' ),
    'section'     => 'basic',
    'default'     => '#222',
    'priority'    => 10,
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'body',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'basic_bg_color',
    'label'       => __( 'Background Color', 'whimsy-plus' ),
    'section'     => 'basic',
    'default'     => '#fff',
    'priority'    => 11,
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'body',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'label'       => __( 'Body Font', 'whimsy' ),
	'description' => __( 'The font properties for the body text.', 'whimsy' ),
	'section'     => 'typography',
	'default'     => array(
		'font-family'    => 'Ubuntu',
		'variant'        => 'regular',
		'font-size'      => '18px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
) );
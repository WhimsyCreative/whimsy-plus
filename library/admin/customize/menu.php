<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/* Nav */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'switch',
    'settings'    => 'switch_primary_menu_position',
    'label'       => __( 'Show menu below Header?', 'whimsy-plus' ),
    'help'        => __( 'The menu will appear beneath your Site Identity and Header.', 'whimsy-plus' ),
    'section'     => 'menu',
    'default'     => 0,
    'priority'    => 10,
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'nav_bar_bg',
    'label'       => __( 'Menu Background Color', 'whimsy-plus' ),
    'section'     => 'menu',
    'default'     => 'rgba(255,255,255,1)',
    'priority'    => 18,
    'output'      => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),

) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'nav_bar_link_color',
    'label'       => __( 'Menu Link Color', 'whimsy-plus' ),
    'section'     => 'menu',
    'default'     => '#52b0c1',
    'priority'    => 18,
    'output'      => array(
        array(
            'element'  => '#site-navigation a', '.sub-collapser',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation a', '.sub-collapser',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

/* Typography */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'primary_menu_font',
	'label'       => __( 'Primary Menu Font', 'whimsy' ),
	'description' => __( 'The font properties for primary menu links.', 'whimsy' ),
	'section'     => 'typography',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '18px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#site-navigation a',
		),
	),
) );

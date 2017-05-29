<?php

/* Menu Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'primary_menu_font',
	'label'       => __( 'Primary Menu Font', 'whimsy-plus' ),
	'tooltip'     => __( 'The font properties for primary menu links.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => '#site-navigation, #site-navigation a',
		),
	),
    'transport'   => 'auto',
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'primary_menu_font_submenu',
	'label'       => __( 'Sub-Menu Font', 'whimsy-plus' ),
	'tooltip'     => __( 'The font properties for sub-menu links.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#52b0c1',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 70,
	'output'      => array(
		array(
			'element' => '#site-navigation ul.sub-menu, #site-navigation ul.sub-menu a',
		),
	),
    'transport'   => 'auto',
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'sticky_menu_font',
	'label'       => __( 'Sticky Menu Font', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#52b0c1',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 90,
	'output'      => array(
		array(
			'element' => '#site-navigation', '#site-navigation a',
		),
	),
    'transport'   => 'auto',
) );
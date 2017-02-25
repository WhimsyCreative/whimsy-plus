<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/* Nav */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_sticky_menu',
    'label'       => __( 'Make menu sticky?', 'whimsy-plus' ),
    'help'        => __( 'The menu will stay visible at the top of screens on scroll.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'switch_primary_menu_position',
    'label'       => __( 'Show menu below logo?', 'whimsy-plus' ),
    'help'        => __( 'The menu will appear beneath your Site Identity and Header.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg',
	'label'       => __( 'Menu Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 70,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'background-color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'primary_menu_font',
	'label'       => __( 'Primary Menu Font', 'whimsy-plus' ),
	'tooltip'     => __( 'The font properties for primary menu links.', 'whimsy-plus' ),
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
			'element' => '#site-navigation, #site-navigation a',
		),
	),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation, #site-navigation a',
            'function' => 'style',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_hover',
	'label'       => __( 'Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#333333',
	'priority'    => 70,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_active',
	'label'       => __( 'Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#aaaaaa',
	'priority'    => 70,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a:active,#site-navigation a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_nav_bar_bg_submenu_divider',
	'section'     => 'whimsy_plus_menu',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Sub-Menu', 'whimsy-plus' ) . '</div>',
	'priority'    => 70,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg_submenu',
	'label'       => __( 'Sub-Menu Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 70,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a',
            'property' => 'background'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a',
            'property' => 'background',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg_submenu_hover',
	'label'       => __( 'Sub-Menu Background Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#eaeaea',
	'priority'    => 70,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:hover',
            'property' => 'background'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:hover',
            'property' => 'background',
            'function' => 'css',
        ),
    )
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
	'priority'    => 80,
	'output'      => array(
		array(
			'element' => '#site-navigation ul.sub-menu, #site-navigation ul.sub-menu a',
		),
	),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation ul.sub-menu, #site-navigation ul.sub-menu a',
            'function' => 'css',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_hover_submenu',
	'label'       => __( 'Sub-Menu Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#333333',
	'priority'    => 80,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:hover',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_active_submenu',
	'label'       => __( 'Sub-menu Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#aaaaaa',
	'priority'    => 81,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:active,#site-navigation ul.sub-menu a:focus',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation ul.sub-menu a:active,#site-navigation ul.sub-menu a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
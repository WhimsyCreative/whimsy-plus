<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/* Menu Branding */
//
//Kirki::add_field( 'whimsy_plus', array(
//    'type'        => 'toggle',
//    'settings'    => 'whimsy_plus_use_site_title_menu',
//    'label'       => __( 'Show Site Title in Menu?', 'whimsy-plus' ),
//    'help'        => __( 'The Site Title will appear to the left of the Primary menu.', 'whimsy-plus' ),
//    'section'     => 'whimsy_plus_menu',
//    'default'     => 0,
//    'priority'    => 10,
//) );

/* Position */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'switch_primary_menu_position',
    'label'       => __( 'Show menu below header?', 'whimsy-plus' ),
    'help'        => __( 'The menu will appear beneath your Site Identity and Header.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 10,
) );

/* Sticky Menu */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_sticky_menu',
    'label'       => __( 'Make menu sticky?', 'whimsy-plus' ),
    'help'        => __( 'The menu will stay visible at the top of screens on scroll.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 15,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg_sticky',
	'label'       => __( 'Sticky Menu Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 90,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu',
            'property' => 'background-color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'spacing',
    'settings'    => 'whimsy_plus_sticky_menu_padding',
    'label'       => __( 'Sticky Menu Bar Padding', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
	'default'     => array(
		'top'    => '0',
		'bottom' => '0',
		'left'   => '0',
		'right'  => '0',
	),
    'priority'    => 90,
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu',
            'property' => 'padding',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation.sticky-menu',
            'property' => 'padding',
            'function' => 'css',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg_submenu_sticky',
	'label'       => __( 'Sticky Sub-Menu Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 90,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a',
            'property' => 'background'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a',
            'property' => 'background',
            'function' => 'style',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg_submenu_hover_sticky',
	'label'       => __( 'Sticky Background Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#eaeaea',
	'priority'    => 90,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:hover',
            'property' => 'background'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:hover',
            'property' => 'background',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_hover_submenu_sticky',
	'label'       => __( 'Sticky Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#aaaaaa',
	'priority'    => 90,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:hover',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_active_submenu_sticky',
	'label'       => __( 'Sticky Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#aaaaaa',
	'priority'    => 90,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_sticky_menu',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:active,#site-navigation.sticky-menu ul.sub-menu a:focus',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation.sticky-menu ul.sub-menu a:active,#site-navigation.sticky-menu ul.sub-menu a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );

/* Primary Menu */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_bar_bg',
	'label'       => __( 'Menu Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 20,
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
    'type'        => 'spacing',
    'settings'    => 'whimsy_plus_menu_bar_padding',
    'label'       => __( 'Menu Bar Padding', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
	'default'     => array(
		'top'    => '0',
		'bottom' => '0',
		'left'   => '0',
		'right'  => '0',
	),
    'priority'    => 20,
    'output'      => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'padding',
            'media_query' => '@media screen and (min-width: 980px)',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'padding',
            'function' => 'css',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_color',
	'label'       => __( 'Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#52b0c1',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation,#site-navigation a',
            'property' => 'color'
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
	'priority'    => 20,
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
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'output'      => array(
        array(
            'element'  => '#site-navigation a:active,#site-navigation a:focus',
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

/* Border */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_add_border_primary_links',
    'label'       => __( 'Add a border to primary links?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'select',
	'settings'    => 'whimsy_plus_add_border_style_primary_links',
	'label'       => __( 'Border Style', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => 'none',
	'priority'    => 20,
	'multiple'    => 1,
	'choices'     => array(
		'none' => esc_attr__( 'None', 'whimsy-plus' ),
		'solid' => esc_attr__( 'Solid', 'whimsy-plus' ),
		'dashed' => esc_attr__( 'Dashed', 'whimsy-plus' ),
		'double' => esc_attr__( 'Double', 'whimsy-plus' ),
		'dotted' => esc_attr__( 'Dotted', 'whimsy-plus' ),
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_border_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-style',
            'function' => 'css',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-style',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'dimension',
    'settings'    => 'whimsy_plus_add_border_size_primary_links',
    'label'       => __( 'Border Size', 'whimsy-plus' ),
    'description' => __( 'Change the size of the border on each side.', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => '0px',
    'priority'    => 20,
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_border_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-width',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-width',
            'function' => 'css',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_add_border_color',
	'label'       => __( 'Border Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_border_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-color',
            'function' => 'css',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'border-color',
            'function' => 'css',
        ),
    )
) );


/* Primary Link Background */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_add_bg_primary_links',
    'label'       => __( 'Add a bg to menu links?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_menu',
    'default'     => 0,
    'priority'    => 20,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_primary_links_bg_color',
	'label'       => __( 'Link Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#ffffff',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_bg_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'background-color',
            'function' => 'css',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a',
            'property' => 'background-color',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_primary_links_bg_color_hover',
	'label'       => __( 'Link Hover Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#f8f8f8',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_bg_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'background-color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_primary_links_bg_color_active',
	'label'       => __( 'Link Active Background Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#aaaaaa',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_bg_primary_links',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#site-navigation a:hover',
            'property' => 'background-color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#site-navigation a:active,#site-navigation a:focus',
            'property' => 'background-color',
            'function' => 'style',
        ),
    )
) );

/* Sub-menu */

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_submenu_divider',
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
	'type'        => 'color',
	'settings'    => 'whimsy_plus_nav_link_hover_submenu',
	'label'       => __( 'Sub-Menu Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_menu',
	'default'     => '#333333',
	'priority'    => 70,
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
	'priority'    => 70,
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

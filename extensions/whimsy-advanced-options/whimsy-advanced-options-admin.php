<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/**
 * Add the theme configuration
 */
Kirki::add_config( 'whimsy_customizer_advanced', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Add sections
 */

Kirki::add_section( 'layout', array(
    'title'          => esc_html__( 'Global Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) );    

Kirki::add_section( 'header_layout', array(
    'title'          => __( 'Header Layout', 'whimsy-plus' ),
    'priority'       => 61,
    'capability'     => 'edit_theme_options',
) );   

Kirki::add_section( 'nav_color', array(
    'title'          => __( 'Navigation Colors', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 41,
    'capability'     => 'edit_theme_options',
) );   

Kirki::add_section( 'typography', array(
    'title'          => __( 'Typography', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
) );  

Kirki::add_section( 'content', array(
    'title'          => __( 'Content Display', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 51,
    'capability'     => 'edit_theme_options',
) );     

Kirki::add_section( 'sidebar', array(
    'title'          => __( 'Sidebar Display', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 52,
    'capability'     => 'edit_theme_options',
) );     

Kirki::add_section( 'advanced', array(
    'title'          => __( 'Advanced Options', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
) );  

/* Colors */

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_site_title',
    'label'       => __( 'Site Title Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#ffffff',
    'priority'    => 11,
    'output'      => array(
        array(
            'element'  => '.site-title',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.site-title',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_link',
    'label'       => __( 'Link Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#1fb4ca',
    'priority'    => 12,
    'output'      => array(
        array(
            'element'  => 'a',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'a',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h1',
    'label'       => __( 'H1 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 13,
    'output'      => array(
        array(
            'element'  => 'h1',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h1',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h2',
    'label'       => __( 'H2 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 14,
    'output'      => array(
        array(
            'element'  => 'h2',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h2',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h3',
    'label'       => __( 'H3 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 15,
    'output'      => array(
        array(
            'element'  => 'h3',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h1',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h1',
    'label'       => __( 'H4 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 16,
    'output'      => array(
        array(
            'element'  => 'h4',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h4',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h5',
    'label'       => __( 'H5 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 17,
    'output'      => array(
        array(
            'element'  => 'h5',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h5',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h6',
    'label'       => __( 'H6 Color', 'whimsy-plus' ),
    'section'     => 'colors',
    'default'     => '#333333',
    'priority'    => 18,
    'output'      => array(
        array(
            'element'  => 'h6',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'h6',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

/* Logo */

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'image',
    'settings'     => 'desktop_logo',
    'label'       => __( 'Desktop Logo', 'whimsy-plus' ),
    'help'        => __( 'This is displayed on most screens.', 'whimsy-plus' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 50,
) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'image',
    'settings'     => 'mobile_logo',
    'label'       => __( 'Mobile Logo', 'whimsy-plus' ),
    'help'        => __( 'This is displayed on mobile and tablet screens.', 'whimsy-plus' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 51,
) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'toggle',
    'settings'    => 'centered_desktop_logo',
    'label'       => __( 'Center desktop logo?', 'whimsy-plus' ),
    'section'     => 'title_tagline',
    'default'     => false,
    'priority'    => 52,
) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'toggle',
    'settings'    => 'centered_mobile_logo',
    'label'       => __( 'Center mobile logo?', 'whimsy-plus' ),
    'section'     => 'title_tagline',
    'default'     => false,
    'priority'    => 53,
) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'slider',
    'settings'    => 'logo_padding',
    'label'       => __( 'Logo Padding', 'whimsy-plus' ),
    'description' => __( 'This will add space above the logo.', 'whimsy-plus' ),
    'section'     => 'title_tagline',
    'default'     => '0',
    'priority'    => 54,
    'output'      => array(
        array(
            'element'  => '.desktop-logo-image',
            'property' => 'padding-top',
            'units'    => 'em',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.desktop-logo-image',
            'property' => 'padding-top',
            'units'    => 'em',
            'function' => 'css',
        ),
    ),
    'choices'      => array(
        'min'  => 0,
        'max'  => 10,
        'step' => .1,
    )
) );



/* Nav */

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'nav_bar_bg',
    'label'       => __( 'Navigation Bar Background Color', 'whimsy-plus' ),
    'section'     => 'nav',
    'default'     => 'rgba(255,255,255,0.9)',
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
            'property' => 'color',
        ),
    ),

) );

/* Header */

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'color-alpha',
    'settings'    => 'full_header_bg',
    'label'       => __( 'Header Background Color', 'whimsy-plus' ),
    'section'     => 'header_image',
    'default'     => '#ffffff',
    'priority'    => 11,
    'output'      => array(
        array(
            'element'  => '#header',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#header',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

/* Typography */

Kirki::add_field( 'whimsy_customizer_advanced', array(
	'type'        => 'typography',
	'settings'    => 'headline_font',
	'label'       => __( 'Headline Font', 'whimsy-plus' ),
	'description' => __( 'The font properties for headlines and titles.', 'whimsy-plus' ),
	'section'     => 'typography',
	'default'     => array(
		'font-family'    => 'Ubuntu',
		'variant'        => 'regular',
		'font-size'      => '32px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h1, h2, h3, h4, h5, h6',
		),
	),
) );

Kirki::add_field( 'whimsy_customizer_advanced', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'label'       => __( 'Body Font', 'whimsy-plus' ),
	'description' => __( 'The font properties for the body text.', 'whimsy-plus' ),
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

/* Advanced */

Kirki::add_field( 'whimsy_customizer_advanced', array(
    'type'        => 'toggle',
    'settings'    => 'enable_breadcrumbs',
    'label'       => __( 'Enable breadcrumbs?', 'whimsy-plus' ),
    'section'     => 'advanced',
    'default'     => false,
    'priority'    => 10,
) );

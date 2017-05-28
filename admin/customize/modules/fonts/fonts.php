<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

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
			'element' => 'body',
		),
	),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'body',
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
    'transport'    => 'postMessage',
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
    'transport'    => 'postMessage',
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
    'transport'    => 'postMessage',
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
    'transport'    => 'postMessage',
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
    'transport'    => 'postMessage',
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
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'h6',
        ),
    ),
) );

/* Header Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'custom',
	'settings'    => 'whimsy_plus_body_font_header_divider',
	'section'     => 'whimsy_plus_header_fonts',
	'default'     => '<div class="customize-divider">' . esc_html__( 'Header Fonts', 'whimsy-plus' ) . '</div>',
	'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_site_title_font',
	'label'       => __( 'Site Title Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the Site Title if a logo is not displayed.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_header_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => '100',
		'font-size'      => '1em',
		'line-height'    => '1',
		'letter-spacing' => '0',
		'color'          => '#52b0c1',
		'text-transform' => 'none',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h1.site-title, h1.site-title a',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
			'element' => 'h1.site-title, h1.site-title a',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_site_desc_font',
	'label'       => __( 'Site Description Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for the Site Description if a logo is not displayed.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_header_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'normal',
		'font-size'      => '0.9em',
		'line-height'    => '1',
		'letter-spacing' => '1px',
		'color'          => '#333333',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.site-branding > h2.site-description, .site-branding > h2.site-description a',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.site-branding > h2.site-description, .site-branding > h2.site-description a',
        ),
    ),
) );

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
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation, #site-navigation a',
            'function' => 'style',
        ),
    ),
) );

/* Posts Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_post_title_font',
	'label'       => __( 'Post Title Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .entry-title.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_content_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'regular',
		'font-size'      => '1.8em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'h1.entry-title',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'h1.entry-title',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_entry_cat_font',
	'label'       => __( 'Post Category Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .entry-category.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_content_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '0.8em',
		'line-height'    => '1',
		'letter-spacing' => '1px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#52b0c1',
		'text-transform' => 'uppercase',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.entry-category, entry-category a',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
			'element' => '.entry-category, entry-category a',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_entry_meta_font',
	'label'       => __( 'Post Meta Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .entry-meta.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_content_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'center'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.entry-meta',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.entry-meta',
        ),
    ),
) );

/* Sidebar Fonts */
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_title_font',
	'label'       => __( 'Widget Title Font', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget-title.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '0.8em',
		'line-height'    => '1.5',
		'letter-spacing' => '1px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#aaaaaa',
		'text-transform' => 'uppercase',
		'text-align'     => 'left'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => 'h1.widget-title, #wp-calendar caption, .widget h3',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => 'h1.widget-title, #wp-calendar caption, .widget h3',
        ),
    ),
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'typography',
	'settings'    => 'whimsy_plus_sidebar_widget_text_font',
	'label'       => __( 'Widget Text', 'whimsy-plus' ),
	'tooltip' => __( 'The font properties for .widget.', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_sidebar_fonts',
	'default'     => array(
		'font-family'    => 'Lato',
		'variant'        => 'bold',
		'font-size'      => '1em',
		'line-height'    => '2',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => '.widget',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
			'element' => '.widget',
        ),
    ),
) );

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
		'text-align'     => 'left'
	),
	'priority'    => 20,
	'output'      => array(
		array(
			'element' => '#colophon',
		),
	),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
			'element' => '#colophon',
        ),
    ),
) );

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
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.social-sharing-title',
        ),
    ),
) );
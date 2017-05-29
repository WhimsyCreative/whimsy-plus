<?php
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
    'transport'    => 'auto',
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
			'element' => '.site-branding h2.site-description, .site-branding h2.site-description a',
		),
	),
    'transport'    => 'auto',
    'js_vars'      => array(
        array(
            'element'  => '.site-branding h2.site-description, .site-branding h2.site-description a',
        ),
    ),
) );

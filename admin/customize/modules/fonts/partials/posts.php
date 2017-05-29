<?php

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
    'transport'    => 'auto',
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
    'transport'    => 'auto',
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
    'transport'    => 'auto',
    'js_vars'      => array(
        array(
            'element'  => '.entry-meta',
        ),
    ),
) );
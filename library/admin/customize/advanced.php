<?php
/**
 * Advanced options
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'enable_breadcrumbs',
    'label'       => __( 'Show breadcrumbs?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => false,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_enable_twitter_mentions',
    'label'       => __( 'Link @username Twitter mentions?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => false,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_add_social_sharing_icons',
    'label'       => __( 'Show sharing icons on posts?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => false,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'     => 'text',
	'settings' => 'whimsy_plus_social_sharing_custom',
	'label'    => __( 'Replace <b>Share</b> text.', 'whimsy-plus' ),
	'section'  => 'whimsy_plus_advanced',
	'priority' => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'whimsy_plus_add_social_sharing_icons',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'transport'    => 'refresh',
    'js_vars'      => array(
        array(
            'function' => 'html',
        ),
    )
) );
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
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_social_sharing_link',
	'label'       => __( 'Icon Link Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_advanced',
	'default'     => '#52b0c1',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'  => array(
        array(
        'setting'  => 'whimsy_plus_add_social_sharing_icons',
        'operator' => '==',
        'value'    => true
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#social-sharing a, #social-sharing a:visited',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#social-sharing a, #social-sharing a:visited',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_social_sharing_link_hover',
	'label'       => __( 'Icon Hover Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_advanced',
	'default'     => '#333333',
	'priority'    => 11,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'  => array(
        array(
        'setting'  => 'whimsy_plus_add_social_sharing_icons',
        'operator' => '==',
        'value'    => true
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#social-sharing a:hover',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#social-sharing a:hover',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'color',
	'settings'    => 'whimsy_plus_social_sharing_link_active',
	'label'       => __( 'Icon Active Color', 'whimsy-plus' ),
	'section'     => 'whimsy_plus_advanced',
	'default'     => '#aaaaaa',
	'priority'    => 12,
	'choices'     => array(
		'alpha' => true,
	),
    'active_callback'  => array(
        array(
        'setting'  => 'whimsy_plus_add_social_sharing_icons',
        'operator' => '==',
        'value'    => true
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#social-sharing a:active,#social-sharing a:focus',
            'property' => 'color'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#social-sharing a:active,#social-sharing a:focus',
            'property' => 'color',
            'function' => 'style',
        ),
    )
) );
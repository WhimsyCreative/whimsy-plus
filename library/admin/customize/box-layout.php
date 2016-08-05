<?php

/**
 * Whimsy+ Box Layout Style
 *
 * @package whimsy
 */

if ( class_exists( 'Whimsy_Kirki' ) ) { 
    
	/**
	 * Add the configuration.
	 */
	Whimsy_Kirki::add_config( 'whimsy_box_customizer', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );  
    
    /* Box layout fields. */
    
    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
        'type'        => 'switch',
        'settings'    => 'box_layout',
        'label'       => __( 'Enable Box-style layout?', 'whimsy' ),
        'section'     => 'layout',
        'default'     => false,
        'priority'    => 10,
    ) );
    
    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
        'type'        => 'color-alpha',
        'settings'    => 'color_box_bg',
        'label'       => __( 'Box Background Color', 'whimsy' ),
        'section'     => 'layout',
        'default'     => '#ffffff',
        'priority'    => 11,
        'required'  => array(
            array(
            'setting'  => 'box_layout',
            'operator' => '==',
            'value'    => true
            ),
        ),
        'output'      => array(
            array(
                'element'  => '.box-layout',
                'property' => 'background-color',
            ),
        ),
		'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => '.box-layout',
                'function' => 'css',
                'property' => 'background-color',
            ),
        ),
    ) );

    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
        'type'        => 'dimension',
        'settings'    => 'box_layout_margin',
        'label'       => __( 'Margin', 'whimsy' ),
        'description' => __( 'This controls how much blank space is between the sides of the browser window and your content.', 'whimsy' ),
        'section'     => 'layout',
        'default'     => '10px',
        'priority'    => 13,
        'required'  => array(
            array(
            'setting'  => 'box_layout',
            'operator' => '==',
            'value'    => true
            ),
        ),
        'output'      => array(
            array(
                'element'  => '.box-layout',
                'property' => 'margin',
            ),
        ),
		'transport'   => 'postMessage',
		'js_vars'     => array(
			array(
				'element'  => '.box-layout',
				'property' => 'margin',
				'function' => 'css',
			),
		),
    ) );

    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
    	'type'        => 'slider',
    	'settings'    => 'box_layout_border_radius',
    	'label'       => __( 'Border Radius', 'kirki-demo' ),
		'description' => __( 'This will curve the corners of the box layout.', 'kirki-demo' ),
    	'section'     => 'layout',
    	'default'     => '10',
    	'priority'    => 14,
        'required'  => array(
            array(
            'setting'  => 'box_layout',
            'operator' => '==',
            'value'    => true
            ),
        ),
        'output'      => array(
            array(
                'element'  => '.box-layout',
                'property' => 'border-radius',
                'units'    => 'px',
            ),
        ),
		'transport'    => 'postMessage',
		'js_vars'      => array(
			array(
				'element'  => '.box-layout',
				'property' => 'border-radius',
				'units'    => 'px',
				'function' => 'css',
			),
		),
        'choices'      => array(
            'min'  => 0,
            'max'  => 30,
            'step' => 1,
        )
    ) );
    
    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
        'type'        => 'toggle',
        'settings'    => 'box_shadow',
        'label'       => __( 'Enable box shadow?', 'whimsy' ),
        'section'     => 'layout',
        'default'     => false,
        'priority'    => 15,
        'required'  => array(
            array(
            'setting'  => 'box_layout',
            'operator' => '==',
            'value'    => true
            ),
        ),
    ) );
    
    Whimsy_Kirki::add_field( 'whimsy_box_customizer', array(
    	'type'        => 'radio-buttonset',
    	'settings'    => 'box_shadow_style',
    	'label'       => __( 'Box-Shadow Style', 'whimsy' ),
		'description' => __( 'Pick a light or dark glow around the box.', 'whimsy' ),
    	'section'     => 'layout',
    	'default'     => 'light',
    	'priority'    => 15,
        'choices'     => array(
            'light'    => __( 'Light', 'whimsy' ),
            'dark'    => __( 'Dark', 'whimsy' )
        ),
        'required'    => array(
            array(
                'setting'  => 'box_layout',
                'operator' => '==',
                'value'    => true
            ),
        )
    ) );
}
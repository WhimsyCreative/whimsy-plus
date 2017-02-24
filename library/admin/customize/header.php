<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'dimension',
    'settings'    => 'header_as_bg_width',
    'label'       => __( 'Header Width', 'whimsy-plus' ),
    'help'        => __( 'Specify width of your header in %, px, or em.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => '100%',
    'priority'    => 10,
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'width',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'width',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'dimension',
    'settings'    => 'header_as_bg_height',
    'label'       => __( 'Header Height', 'whimsy-plus' ),
    'help'        => __( 'Use the height of your header image in pixels.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => '210px',
    'priority'    => 10,
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'height',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'height',
            'function' => 'css',
        ),
    )
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'switch',
    'settings'    => 'header_as_bg',
    'label'       => __( 'Use Header Image as a background?', 'whimsy-plus' ),
    'help'        => __( 'The Header Image will be used as a full-screen background, placed behind the menus and titles.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => 0,
    'priority'    => 10,
) );

Kirki::add_field( 'whimsy_plus', array(
	'type'        => 'image',
	'settings'    => 'header_background_image',
	'label'       => __( 'Header Background Image', 'whimsy-plus' ),
	'section'     => 'header',
	'default'     => '',
	'priority'    => 10,
    'required'    => array(
        array(
            'setting'  => 'header_as_bg',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-image'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-image',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_as_bg_size',
    'label'       => __( 'Background-Size', 'whimsy-plus' ),
    'description' => __( 'This controls how the background is sized.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => 'cover',
    'priority'    => 15,
    'choices'     => array(
        'normal'    => __( 'Normal', 'whimsy-plus' ),
        'contain'   => __( 'Contain', 'whimsy-plus' ),
        'cover'     => __( 'Cover', 'whimsy-plus' ),
        '100%'    => __( '100%', 'whimsy_plus' )
    ),
    'required'    => array(
        array(
            'setting'  => 'header_as_bg',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-size'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-size',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_as_bg_position',
    'label'       => __( 'Background-Position', 'whimsy-plus' ),
    'description' => __( 'This controls where the background is positioned.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => 'center center',
    'priority'    => 25,
    'choices'     => array(
        'center top'        => __( 'center top', 'whimsy-plus' ),
        'center center'     => __( 'center center', 'whimsy-plus' ),
        'center bottom'     => __( 'center bottom', 'whimsy-plus' ),
        'left top'          => __( 'left top', 'whimsy-plus' ),
        'left center'       => __( 'left center', 'whimsy-plus' ),
        'left bottom'       => __( 'left bottom', 'whimsy-plus' ),
        'right top'         => __( 'right top', 'whimsy-plus' ),
        'right center'      => __( 'right center', 'whimsy-plus' ),
        'right bottom'      => __( 'right bottom', 'whimsy-plus' ),
    ),
    'required'    => array(
        array(
            'setting'  => 'header_as_bg',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-position'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#header-container',
            'property' => 'background-position',
            'function' => 'css',
        ),
    )
) );

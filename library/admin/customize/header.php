<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy-plus', array(
    'type'        => 'switch',
    'settings'    => 'header_as_bg',
    'label'       => __( 'Use Header Image as a background?', 'whimsy-plus' ),
    'help'        => __( 'The Header Image will be used as a full-screen background, placed behind the menus and titles.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => 0,
    'priority'    => 10,
) );

Kirki::add_field( 'whimsy-plus', array(
    'type'        => 'dimension',
    'settings'    => 'header_as_bg_height',
    'label'       => __( 'Header Height', 'whimsy-plus' ),
    'help'        => __( 'Use the height of your header image in pixels.', 'whimsy-plus' ),
    'section'     => 'header',
    'default'     => '250px',
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
            'element'  => '.header-bg-image',
            'property' => 'height',
            'units'    => 'px',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.header-bg-image',
            'property' => 'height',
            'units'    => 'px',
            'function' => 'css',
        ),
    )
) );

Kirki::add_field( 'whimsy-plus', array(
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
        '100%'    => __( '100%', 'whimsy-plus' )
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
            'element'  => '.header-bg-image',
            'property' => 'background-size'
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '.header-bg-image',
            'property' => 'background-size',
            'function' => 'css',
        ),
    )
) );

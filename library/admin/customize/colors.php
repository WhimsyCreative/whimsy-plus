<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */


Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h1',
    'label'       => __( 'H1 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h2',
    'label'       => __( 'H2 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h3',
    'label'       => __( 'H3 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h1',
    'label'       => __( 'H4 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h5',
    'label'       => __( 'H5 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_h6',
    'label'       => __( 'H6 Color', 'whimsy-plus' ),
    'section'     => 'basic',
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

<?php

/**
 * Whimsy+ Box Layout Style
 *
 * @package whimsy
 */

/* Box layout fields. */
/* Layout */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'slider',
    'settings'    => 'layout_size',
    'label'       => __( 'Site Width', 'whimsy-plus' ),
    'description' => __( 'Set the width of the whole body of the site in %.', 'whimsy-plus' ),
    'section'     => 'layout',
    'default'     => '100',
    'priority'    => 1,
    'output'      => array(
        array(
            'element'  => '#page',
            'units'    => '%',
            'property' => 'width',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#page',
            'property' => 'width',
            'units'    => '%',
            'function' => 'css',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'switch',
    'settings'    => 'box_layout',
    'label'       => __( 'Enable Box-Style layout?', 'whimsy-plus' ),
    'section'     => 'layout',
    'default'     => false,
    'priority'    => 10,
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'color_box_bg',
    'label'       => __( 'Box Background Color', 'whimsy-plus' ),
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
            'element'  => '#page',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#page',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'dimension',
    'settings'    => 'box_layout_margin',
    'label'       => __( 'Margin', 'whimsy-plus' ),
    'description' => __( 'This controls how much blank space is between the sides of the browser window and your content.', 'whimsy-plus' ),
    'section'     => 'layout',
    'default'     => '0 auto',
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
            'element'  => '#page',
            'property' => 'margin',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#page',
            'property' => 'margin',
            'function' => 'css',
        ),
    ),
) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'dimension',
    'settings'    => 'box_layout_border_radius',
    'label'       => __( 'Border Radius', 'whimsy-plus' ),
    'description' => __( 'This will curve the corners of the box layout.', 'whimsy-plus' ),
    'section'     => 'layout',
    'default'     => '0',
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
            'element'  => '#page',
            'property' => 'border-radius',
        ),
    ),
    'transport'    => 'postMessage',
    'js_vars'      => array(
        array(
            'element'  => '#page',
            'property' => 'border-radius',
            'function' => 'css',
        ),
    )
) );
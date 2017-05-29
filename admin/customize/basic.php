<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'basic_text_color',
    'label'       => __( 'Text Color', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_colors',
    'default'     => '#222',
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'body',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'basic_bg_color',
    'label'       => __( 'Background Color', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_colors',
    'default'     => '#fff',
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => 'body',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),

) );

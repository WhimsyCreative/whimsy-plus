<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/* Nav */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'nav_bar_bg',
    'label'       => __( 'Menu Background Color', 'whimsy-plus' ),
    'section'     => 'menu',
    'default'     => 'rgba(255,255,255,1)',
    'priority'    => 18,
    'output'      => array(
        array(
            'element'  => '#site-navigation',
            'property' => 'background-color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),

) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'color-alpha',
    'settings'    => 'nav_bar_link_color',
    'label'       => __( 'Menu Link Color', 'whimsy-plus' ),
    'section'     => 'menu',
    'default'     => '#52b0c1',
    'priority'    => 18,
    'output'      => array(
        array(
            'element'  => '#site-navigation a', '.sub-collapser',
            'property' => 'color',
        ),
    ),
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '#site-navigation a', '.sub-collapser',
            'function' => 'css',
            'property' => 'color',
        ),
    ),

) );

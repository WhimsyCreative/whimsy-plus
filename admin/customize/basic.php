<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'background',
    'settings'    => 'whimsy_plus_basic_bg_color',
    'label'       => __( 'Background', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_layout',
    'output'      => array(
        array(
            'element'  => 'body',
        ),
    ),
    'transport'   => 'auto',
) );

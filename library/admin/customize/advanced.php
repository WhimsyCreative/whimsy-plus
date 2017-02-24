<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */


/* Advanced */

Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'enable_breadcrumbs',
    'label'       => __( 'Enable breadcrumbs?', 'whimsy-plus' ),
    'section'     => 'advanced',
    'default'     => false,
    'priority'    => 10,
) );
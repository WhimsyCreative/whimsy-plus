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
    'label'       => __( 'Enable breadcrumbs?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => true,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_enable_twitter_mentions',
    'label'       => __( 'Enable @username Twitter mentions?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => true,
    'priority'    => 10,
) );
Kirki::add_field( 'whimsy_plus', array(
    'type'        => 'toggle',
    'settings'    => 'whimsy_plus_add_social_sharing_icons',
    'label'       => __( 'Enable social sharing icons on posts?', 'whimsy-plus' ),
    'section'     => 'whimsy_plus_advanced',
    'default'     => true,
    'priority'    => 10,
) );
<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */


/**
 * Add sections
 */

Kirki::add_section( 'basic', array(
    'title'          => esc_html__( 'Basic', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'layout', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'menu', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'header', array(
    'title'          => esc_html__( 'Header', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'content', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'sidebar', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
) );    

Kirki::add_section( 'menu', array(
    'title'          => __( 'Menu', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 41,
    'capability'     => 'edit_theme_options',
) );   

Kirki::add_section( 'typography', array(
    'title'          => __( 'Typography', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
) );  

Kirki::add_section( 'content', array(
    'title'          => __( 'Content Display', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 51,
    'capability'     => 'edit_theme_options',
) );     

Kirki::add_section( 'sidebar', array(
    'title'          => __( 'Sidebar Display', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 52,
    'capability'     => 'edit_theme_options',
) );     

Kirki::add_section( 'advanced', array(
    'title'          => __( 'Advanced Options', 'whimsy-plus' ),
    'panel'          => 'whimsy_framework_whimsy_plus_panel',
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
) );  
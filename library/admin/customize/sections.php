<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/**
 * Add sections
 */

Kirki::add_panel( 'whimsy_plus_basic', array(
    'title'          => esc_html__( 'Basic', 'whimsy-plus' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'whimsy_plus_colors', array(
    'title'          => __( 'Colors', 'whimsy-plus' ),
    //'panel'          => 'whimsy_plus_basic',
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_fonts', array(
    'title'          => __( 'Fonts', 'whimsy-plus' ),
    //'panel'          => 'whimsy_plus_basic',
    'priority'       => 31,
    'capability'     => 'edit_theme_options',
) );    
Kirki::add_section( 'whimsy_plus_layout', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),

    'priority'       => 31,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'whimsy_plus_menu', array(
    'title'          => esc_html__( 'Menu', 'whimsy-plus' ),

    'priority'       => 32,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_header', array(
    'title'          => esc_html__( 'Header', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_content', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_sidebar', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_advanced', array(
    'title'          => __( 'Advanced Options', 'whimsy-plus' ),

    'priority'       => 39,
    'capability'     => 'edit_theme_options',
) );  
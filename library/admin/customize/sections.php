<?php
/**
 * Add sections
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_section( 'whimsy_plus_colors', array(
    'title'          => __( 'Colors', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_global',
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_fonts', array(
    'title'          => __( 'Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_global',
    'priority'       => 31,
    'capability'     => 'edit_theme_options',
) );    
Kirki::add_section( 'whimsy_plus_layout', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_global',
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
    'title'          => esc_html__( 'Content', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_sidebar', array(
    'title'          => esc_html__( 'Sidebar', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_footer', array(
    'title'          => esc_html__( 'Footer', 'whimsy-plus' ),

    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_advanced', array(
    'title'          => __( 'Advanced', 'whimsy-plus' ),

    'priority'       => 39,
    'capability'     => 'edit_theme_options',
) );  
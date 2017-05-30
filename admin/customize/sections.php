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
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_fonts', array(
    'title'          => __( 'Fonts', 'whimsy-plus' ),
    'priority'       => 70,
    'capability'     => 'edit_theme_options',
) );    
Kirki::add_section( 'whimsy_plus_content', array(
    'title'          => esc_html__( 'Posts & Pages', 'whimsy-plus' ),
    'priority'       => 80,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_global_fonts', array(
    'title'          => esc_html__( 'Global Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 31,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'whimsy_plus_menu_fonts', array(
    'title'          => esc_html__( 'Menu Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 32,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_header_fonts', array(
    'title'          => esc_html__( 'Header Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_content_fonts', array(
    'title'          => esc_html__( 'Posts & Pages Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_sidebar_fonts', array(
    'title'          => esc_html__( 'Sidebar Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_footer_fonts', array(
    'title'          => esc_html__( 'Footer Fonts', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_fonts',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_layout', array(
    'title'          => esc_html__( 'Global Layout', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_layout',
    'priority'       => 31,
    'capability'     => 'edit_theme_options',
) ); 
Kirki::add_section( 'whimsy_plus_menu', array(
    'title'          => esc_html__( 'Menu', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_layout',
    'priority'       => 32,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_header', array(
    'title'          => esc_html__( 'Header', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_layout',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_sidebar', array(
    'title'          => esc_html__( 'Sidebar', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_layout',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_footer', array(
    'title'          => esc_html__( 'Footer', 'whimsy-plus' ),
    'panel'          => 'whimsy_plus_panel_layout',
    'priority'       => 33,
    'capability'     => 'edit_theme_options',
) );
Kirki::add_section( 'whimsy_plus_advanced', array(
    'title'          => __( 'Advanced', 'whimsy-plus' ),

    'priority'       => 39,
    'capability'     => 'edit_theme_options',
) );  
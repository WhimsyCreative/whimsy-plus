<?php
/**
 * Add panels
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_panel( 'whimsy_plus_panel_layout', array(
    'title'          => esc_html__( 'Layout', 'whimsy-plus' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) ); 

Kirki::add_panel( 'whimsy_plus_panel_fonts', array(
    'title'          => esc_html__( 'Fonts', 'whimsy-plus' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) ); 
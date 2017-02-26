<?php
/**
 * Add panels
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

Kirki::add_panel( 'whimsy_plus_global', array(
    'title'          => esc_html__( 'Global', 'whimsy-plus' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) ); 
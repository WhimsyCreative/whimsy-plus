<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

/**
 * Add the theme configuration
 */
Kirki::add_config( 'whimsy_plus', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

function whimsy_plus_config_styling( $config ) {
	return wp_parse_args( array(
		'color_accent' => '#37a7c1',
		'disable_loader'   => true,
	), $config );
}
add_filter( 'kirki/config', 'whimsy_plus_config_styling' );


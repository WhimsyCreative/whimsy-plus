<?php
/**
 * Add [row][column][/column][/row] shortcodes
 *
 * @since 1.0.0
 */

// Add Columns Shortcode

// Add Containing Shortcode
function whimsy_column_wrapper( $atts , $content = null ) {
	// Code
return '<div class="whimsy-row grid">'.do_shortcode($content).'</div>';
}
add_shortcode( 'row', 'whimsy_column_wrapper' );

// Add Panel Shortcode
function whimsy_column( $atts , $content = null ) {

	$whimsy_column_atts = shortcode_atts( array(
		'size' => '6',
	), $atts );

	// Code
return '<div class="whimsy-column c' . esc_attr($whimsy_column_atts['size']) . ' ">'.do_shortcode($content).'</div>';
}
add_shortcode( 'column', 'whimsy_column' );
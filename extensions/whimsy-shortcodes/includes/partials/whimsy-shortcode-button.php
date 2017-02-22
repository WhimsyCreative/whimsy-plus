<?php
/**
 * Add [button] shortcode
 *
 * @since 1.0.0
 */
// Add Button Shortcode
function whimsy_button( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => 'http://',
			'style' => '',
			'target' => '_self',
			'size' => ''
		), $atts )
	);

	// Code Output
    $whimsy_sc_divider = '<a href="'.$link.'" class="btn-shortcode '.$style.' '.$size.'" target="'.$target.'">'.$content.'</a>';

    return $whimsy_sc_divider;
}
add_shortcode( 'button', 'whimsy_button' );
<?php
/**
 * Add [box][/box] shortcode
 *
 * @since 1.0.0
 */

function whimsy_box_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'style' => 'default',
			'class' => '',
		), $atts )
	);

	// Code Output
	return '<div class="whimsy-box whimsy-box-'.$style.' '.$class.'"><span class="whimsy-box-content">'.do_shortcode($content).'</span></div>';
}
add_shortcode( 'box', 'whimsy_box_shortcode' );
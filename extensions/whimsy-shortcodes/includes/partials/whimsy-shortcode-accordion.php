<?php
/**
 * Add [accordion][panel][/panel][/accordion] shortcodes
 *
 * @since 1.0.0
 */
// Add Accordion Shortcode

// Add Containing Shortcode
function whimsy_sc_accordian( $atts , $content = null ) {
	// Code
	return '<dl class="whimsy-accordion">'.do_shortcode($content).'</dl>';
}
add_shortcode( 'accordion', 'whimsy_sc_accordian' );

// Add Panel Shortcode
function whimsy_sc_panel( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'intro' => 'This is the title',
		), $atts )
	);

	// Code Output
	return '<dt class="whimsy-accordion-intro"><a href="#">'.$intro.'</a></dt><dd>'.do_shortcode($content).'</dd>';
}
add_shortcode( 'panel', 'whimsy_sc_panel' );
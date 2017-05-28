<?php
/**
 * Customizer style output
 *
 * @package whimsy-framework
 */

/**
 * Insert Customizer styles.
 */
function whimsy_customizer_styles() {
	
	$whimsy_link_color = get_theme_mod( 'whimsy_link_color' );
	$whimsy_alt_color = get_theme_mod( 'whimsy_alt_color' );
	$whimsy_body_color = get_theme_mod( 'whimsy_body_color' );
	$whimsy_menu_background_color = get_theme_mod( 'whimsy_menu_background_color' );   
	$whimsy_menu_link_color = get_theme_mod( 'whimsy_menu_link_color' );   

	if ( class_exists( 'woocommerce' ) ) {
		echo '.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce-page .shipping-calculator-button, #infinite-handle span, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-cart .wc-proceed-to-checkout { color: ' . esc_html($whimsy_link_color) . '; border-color: 1px solid ' . esc_html($whimsy_link_color) . ' }';
	} 

	echo '#site-navigation ul.whimsy-nav.collapsed { background: ' . esc_html($whimsy_menu_background_color) . '; }';

	echo '.sub-collapser { color: ' . esc_html($whimsy_menu_link_color) . '; }';

}
add_action('wp_head', 'whimsy_customizer_styles', 100);
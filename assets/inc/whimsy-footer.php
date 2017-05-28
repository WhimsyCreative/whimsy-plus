<?php
/**
 * HTML output for footer credit.
 *
 * @since  2.1.0
 * @access public
 * @return void
 */

add_action( 'whimsy_footer', 'whimsy_add_custom_footer_credits', 10 );

if ( ! function_exists( 'whimsy_add_custom_footer_credits' ) ) :
function whimsy_add_custom_footer_credits() {
    
    if ( Kirki::get_option( 'whimsy_plus_add_custom_footer_text' ) == true ) { 

        remove_action( 'whimsy_footer', 'whimsy_get_footer_credits', 20 );
        echo get_theme_mod( 'whimsy_plus_footer_custom_credit' );
        
  }
}
endif;
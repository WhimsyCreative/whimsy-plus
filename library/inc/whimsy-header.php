<?php
/**
 * Dynamically build out the header so it can be extended by the Customizer.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

if ( ! function_exists( 'whimsy_get_advanced_header' ) ) :
function whimsy_get_advanced_header() {
    
    if ( Kirki::get_option( 'header_as_bg' ) == true ) : // If there's a header image and Header as a Background is ENABLED then the header image should be displayed as a background style. ?>
        <?php $header_background_image = get_theme_mod( 'header_background_image' ); ?>
        <div id="whimsy-header" class="header-bg-image" style="background-image: url('<?php echo esc_url( $header_background_image ); ?>')">
            
            <?php whimsy_desktop_branding(); ?>
            
		</div><!-- #header -->

    <?php endif; // End check for header image. 
}
endif;


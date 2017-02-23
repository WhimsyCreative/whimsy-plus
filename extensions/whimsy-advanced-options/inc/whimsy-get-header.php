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
    
    if ( get_header_image() && display_header_text() ) : // If there's a header image and header text. ?>

        <header id="header">
            
            <?php whimsy_desktop_branding(); // Include desktop branding/logo. ?>
            
            <a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

		</header><!-- #header -->

    <?php elseif ( get_header_image() && !display_header_text() ) : // If there's a header image but no header text. ?>

        <header id="header">
            
            <?php whimsy_desktop_branding(); ?>
            
            <a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>

		</header><!-- #header -->

    <?php elseif ( get_header_image() && Kirki::get_theme_mod( 'header_as_bg' ) == true ) : // If there's a header image and Header as a Background is ENABLED then the header image should be displayed as a background style. ?>
        
        <header class="header-bg-image" style="background-image: url(<?php header_image(); ?>)" id="header">
            
            <?php whimsy_desktop_branding(); ?>
            
		</header><!-- #header -->

    <?php elseif ( get_header_image() && Kirki::get_theme_mod( 'header_as_bg' ) == false ) : // If there's a header image and the Header as a Background option is DISABLED, it should be displayed as an image block under the site title. ?>
        
        <header id="header">
            
            <?php whimsy_desktop_branding(); ?>
            
            <img class="header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
        
		</header><!-- #header -->

    <?php endif; // End check for header image. 
}
endif;

/**
 * HTML output for mobile site branding.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
if ( ! function_exists( 'whimsy_mobile_branding' ) ) :
function whimsy_mobile_branding() {
    
    if ( Kirki::get_theme_mod( 'mobile_logo' ) ) : ?>
            
        <div class="mobile-site-branding"><!-- Does not display on screens larger than 980px -->

            <div class="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( Kirki::get_theme_mod( 'mobile_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="mobile-logo-image <?php whimsy_centered_logo(); ?>"></a>
            </div>

        </div><!-- /.mobile-site-branding -->

    <?php else : // If no logo is set, display title as text. ?>
            
        <div class="mobile-site-branding"><!-- Does not display on screens larger than 980px -->

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    
        </div><!-- /.mobile-site-branding -->

    <?php endif; // End mobile logo check. 

}
endif; // End function_exists mobile logo check.

/**
 * HTML output for desktop site branding.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
if ( ! function_exists( 'whimsy_desktop_branding' ) ) :
function whimsy_desktop_branding() { 
    
    if ( Kirki::get_theme_mod( 'desktop_logo' ) ) : ?>

            
            <div class="site-branding"><!-- Does not display on screens smaller than 980px -->
                        
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    
                    <img src="<?php echo esc_url( Kirki::get_theme_mod( 'desktop_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="desktop-logo-image <?php whimsy_centered_logo(); ?>">
                
                </a>
                        				
			</div><!-- /.site-branding -->

				<?php else : // If no logo is set, display title and description text. ?>

            <div class="site-branding"><!-- Does not display on screens smaller than 980px -->
                
            <hgroup>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </hgroup>

			</div><!-- /.site-branding -->
                
            <?php endif; // End desktop logo check.                      }
}
endif; // End function_exists desktop logo check. 
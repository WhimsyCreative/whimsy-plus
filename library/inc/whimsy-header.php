<?php
/**
 * Dynamically build out the header so it can be extended by the Customizer.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
/*
//remove_action( 'whimsy_header', 'whimsy_get_header', 20 );
//add_action( 'whimsy_header', 'whimsy_get_advanced_header', 15 );


if ( ! function_exists( 'whimsy_get_advanced_header' ) ) :
function whimsy_get_advanced_header() {
    
    if ( Kirki::get_option( 'header_as_bg' ) == true ) : // If there's a header image and Header as a Background is ENABLED then the header image should be displayed as a background style. ?>
        <?php $header_background_image = get_theme_mod( 'header_background_image' ); ?>
        <div id="whimsy-header" class="header-bg-image" style="background-image: url('<?php echo esc_url( $header_background_image ); ?>')">
            
            <?php whimsy_desktop_branding(); ?>
            
		</div><!-- #header -->

    <?php endif; // End check for header image. 
}
endif;*/

add_action( 'whimsy_header', 'whimsy_switch_primary_menu_position', 1 );
add_action( 'whimsy_header', 'whimsy_plus_is_menu_sticky', 2 );
add_action( 'whimsy_header', 'whimsy_plus_is_logo_center', 4 );

/**
 * Dynamically change menu position.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
if ( ! function_exists( 'whimsy_switch_primary_menu_position' ) ) :
function whimsy_switch_primary_menu_position() {
    
    if ( Kirki::get_option( 'switch_primary_menu_position' ) == true ) { 
            remove_action( 'whimsy_header', 'whimsy_primary_menu', 10 );
            add_action( 'whimsy_header', 'whimsy_primary_menu', 50 );
    }
}
endif;

/**
 * Add .sticky-menu class with js.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
if ( ! function_exists( 'whimsy_plus_is_menu_sticky' ) ) :
function whimsy_plus_is_menu_sticky() {
    
    if ( Kirki::get_option( 'whimsy_plus_sticky_menu' ) == true ) { 
        wp_enqueue_script( 'whimsy-plus-sticky-menu', WHIMSY_PLUS_JS . 'sticky-menu.js', array('jquery'), WHIMSY_PLUS_VERSION );

    }
}
endif;

/**
 * Float left or center desktop logos.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
if ( ! function_exists( 'whimsy_plus_is_logo_center' ) ) :
function whimsy_plus_is_logo_center() {
    
    if ( Kirki::get_option( 'whimsy_plus_header_desktop_logo_center' ) == false ) { 
        wp_enqueue_style( 'whimsy-plus-center-logo', WHIMSY_PLUS_CSS . 'center-logo.css', array(), WHIMSY_PLUS_VERSION );
    }
}
endif;

/**
 * Add Site Title to sticky menus.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
/*if ( ! function_exists( 'whimsy_plus_use_mobile_logo_sticky_menu' ) ) :
function whimsy_plus_use_mobile_logo_sticky_menu() {
    
    if ( Kirki::get_option( 'whimsy_plus_use_sticky_menu' ) == true ) { 

        add_action( 'whimsy_nav_inside_before', 'whimsy_sticky_branding', 10 );
        
        if ( ! function_exists( 'whimsy_sticky_branding' ) ) :
        
        function whimsy_sticky_branding() {
            
        ?>

            <div class="sticky-site-branding"><!-- Does not display if unset in Customizer -->

                <?php if ( get_theme_mod( 'whimsy_framework_logo_mobile' ) ) : ?>

                    <div id="sticky-site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'whimsy_framework_logo_mobile' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                    </div>

                <?php else : // If no logo is set, display title as text. ?>

                    <h1 class="sticky-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

                <?php endif; // End mobile logo check. ?>

            </div><!-- /.mobile-site-branding -->

        <?php }
        endif; // End function_exists mobile logo check.

    }
}
endif;*/
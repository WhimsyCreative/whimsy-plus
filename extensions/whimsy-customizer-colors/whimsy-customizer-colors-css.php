<?php
function whimsy_colors_enqueue_inline_styles() {

	$whimsy_link_color_css = '';
	$whimsy_link_color = get_option( 'whimsy_link_color' );
	if( $whimsy_link_color ) {
		$whimsy_link_color = get_theme_mod( 'whimsy_link_color' );
		$whimsy_link_color_css .= '
            a, 
            a:visited, 
            ul.whimsy-nav li a:hover, 
            ul.whimsy-nav li a:focus, 
            .entry-title a { color: ' . esc_html($whimsy_link_color) . ' }
		';
	}

	$whimsy_link_hover_color = '';
	$whimsy_link_hover_color = get_option( 'whimsy_link_hover_color' );
	if( $whimsy_link_hover_color ) {
		$whimsy_link_hover_color = get_theme_mod( 'whimsy_link_hover_color' );
		$whimsy_link_hover_color_css .= '
            a:hover, 
            a:focus, 
            a:active, 
            .collapse-button, 
            #site-navigation ul.sub-menu a:hover, 
            ul.whimsy-nav li a,
            button:hover, 
            input[type="button"]:hover, 
            input[type="reset"]:hover, 
            input[type="submit"]:hover, 
            #infinite-handle span:hover,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 { color: ' . esc_html($whimsy_link_hover_color) . '; }

            .collapse-button:hover, .collapse-button:focus { background-color: ' . esc_html($whimsy_link_hover_color) . '; }
		';
	}

    
	if( !empty( $whimsy_link_color_css ) )
		wp_add_inline_style( 'whimsy-customizer-colors-css', $whimsy_link_color_css );
        
	if( !empty( $whimsy_link_hover_color_css ) )
		wp_add_inline_style( 'whimsy-customizer-colors-css', $whimsy_link_hover_color_css );
}

add_action( 'wp_enqueue_scripts', 'whimsy_colors_enqueue_inline_styles', 15 );
//
//
//	$css = '';
//
//
//	$whimsy_link_color                 = get_theme_mod( 'whimsy_link_color', '#444444' );
//	$whimsy_link_hover_color           = get_theme_mod( 'whimsy_link_hover_color', '#444444' );
//	$whimsy_alt_color                  = get_theme_mod( 'whimsy_alt_color', '#444444' );
//	$whimsy_body_color                 = get_theme_mod( 'whimsy_body_color', '#444444' );
//	$whimsy_menu_background_color      = get_theme_mod( 'whimsy_menu_background_color', '#444444' );
//	$whimsy_menu_link_color            = get_theme_mod( 'whimsy_menu_link_color', '#444444' );
//	$whimsy_menu_link_hover_color      = get_theme_mod( 'whimsy_menu_link_hover_color', '#444444' );
//	$whimsy_submenu_background_color   = get_theme_mod( 'whimsy_submenu_background_color', '#444444' );
//	$whimsy_submenu_link_color         = get_theme_mod( 'whimsy_submenu_link_color', '#444444' );
//	$whimsy_header_container_bg_color  = get_theme_mod( 'whimsy_header_container_bg_color', '#444444' );
//	$whimsy_masthead_bg_color          = get_theme_mod( 'whimsy_masthead_bg_color', '#444444' );
//	$whimsy_masthead_text_color        = get_theme_mod( 'whimsy_masthead_text_color', '#444444' );
//	$whimsy_site_title_color           = get_theme_mod( 'whimsy_site_title_color', '#444444' );
//	$whimsy_site_desc_color            = get_theme_mod( 'whimsy_site_desc_color', '#444444' );
//    
//	$css .= '
//    	if( $logo ) {
//
//        body, #content, .widget { color: ' . esc_html($whimsy_body_color) . ' }
//        ::selection,
//        ::-moz-selection { background: ' . $whimsy_link_color . ' }';
//        
//        a, 
//        a:visited, 
//        ul.whimsy-nav li a:hover, 
//        ul.whimsy-nav li a:focus, 
//        .entry-title a { color: ' . esc_html($whimsy_link_color) . ' }
//        
//        a:hover, 
//        a:focus, 
//        a:active, 
//        .collapse-button, 
//        #site-navigation ul.sub-menu a:hover, 
//        ul.whimsy-nav li a,
//        button:hover, 
//        input[type="button"]:hover, 
//        input[type="reset"]:hover, 
//        input[type="submit"]:hover, 
//        #infinite-handle span:hover,
//        h1,
//        h2,
//        h3,
//        h4,
//        h5,
//        h6 { color: ' . $whimsy_alt_color . '; }
//        
//        .collapse-button:hover, .collapse-button:focus { background-color: ' . esc_html($whimsy_alt_color) . '; }
//        
//        a.btn-shortcode, button, input[type="button"], input[type="reset"], input[type="submit"], #infinite-handle span { border-color: ' . $whimsy_link_color . '; color:' . esc_html($whimsy_link_color) . ' }
//        
//        a.btn-shortcode:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #infinite-handle span:hover { border-color: ' . $whimsy_alt_color . ' }
//    
//        #site-navigation, #site-navigation ul.whimsy-nav.collapsed { background: ' . esc_html($whimsy_menu_background_color) . '; }
//        
//        #site-navigation a, .sub-collapser { color: ' . esc_html($whimsy_menu_link_color) . '; }
//        
//        #site-navigation a:hover, #site-navigation a:focus, .sub-collapser :hover, .sub-collapser :focus { color: ' . esc_html($whimsy_menu_link_hover_color) . '; }
//        
//        #site-navigation ul.sub-menu, #site-navigation ul.sub-menu li { background: ' . esc_html($whimsy_submenu_background_color) . '; }
//        
//        #site-navigation ul.sub-menu a { color: ' . esc_html($whimsy_submenu_link_color) . '; }
//        
//        #header-container { background-color: ' . esc_html($whimsy_header_container_bg_color) . '; }
//        
//        #masthead { background-color: ' . esc_html($whimsy_masthead_bg_color) . '; }
//        
//        .site-branding > hgroup > h1.site-title a { color: ' . esc_html($whimsy_site_title_color) . '; }
//        
//        .site-branding > hgroup > h2.site-description { color: ' . esc_html($whimsy_site_desc_color) . '; }
//        ';
//
//	return $css;
//    
//    
//    
//     echo ' Begin Whimsy Colors styles <style type="text/css">';
//	
//            if( get_theme_mod( 'whimsy_framework_logo_center' ) == false ) { 
//                echo '.site-branding > .site-logo img {  max-width: 25%;  text-align: left;  float: left;  margin-bottom: 1.2em; }';
//            }
//            
//            $whimsy_menu_background_color = get_theme_mod( 'whimsy_menu_background_color' );   
//            if( get_theme_mod( 'whimsy_menu_background_color' ) == true ) { echo '#site-navigation, #site-navigation ul.whimsy-nav.collapsed { background: ' . esc_html($whimsy_menu_background_color) . '; }'; }
//            
//            $whimsy_menu_link_color = get_theme_mod( 'whimsy_menu_link_color' ); 
//            if( get_theme_mod( 'whimsy_menu_link_color' ) == true ) { echo '#site-navigation a, .sub-collapser { color: ' . esc_html($whimsy_menu_link_color) . '; }'; }
//            
//            $whimsy_menu_link_hover_color = get_theme_mod( 'whimsy_menu_link_hover_color' );   
//            if( get_theme_mod( 'whimsy_menu_link_hover_color' ) == true ) { echo '#site-navigation a:hover, #site-navigation a:focus, .sub-collapser :hover, .sub-collapser :focus { color: ' . esc_html($whimsy_menu_link_hover_color) . '; }'; }
//            
//            $whimsy_submenu_background_color = get_theme_mod( 'whimsy_submenu_background_color' );  
//            if( get_theme_mod( 'whimsy_submenu_background_color' ) == true ) { echo '#site-navigation ul.sub-menu, #site-navigation ul.sub-menu li { background: ' . esc_html($whimsy_submenu_background_color) . '; }'; }
//            
//            $whimsy_submenu_link_color = get_theme_mod( 'whimsy_submenu_link_color' );   
//            if( get_theme_mod( 'whimsy_submenu_link_color' ) == true ) { echo '#site-navigation ul.sub-menu a { color: ' . esc_html($whimsy_submenu_link_color) . '; }'; }
//
//            $whimsy_header_container_bg_color = get_theme_mod( 'whimsy_header_container_bg_color' ); 
//            if( get_theme_mod( 'whimsy_header_container_bg_color' ) == true ) { echo '#header-container { background-color: ' . esc_html($whimsy_header_container_bg_color) . '; }'; }
//
//            $whimsy_masthead_bg_color = get_theme_mod( 'whimsy_masthead_bg_color' );   
//            if( get_theme_mod( 'whimsy_masthead_bg_color' ) == true ) { echo '#masthead { background-color: ' . esc_html($whimsy_masthead_bg_color) . '; }'; }
//            
//            $whimsy_masthead_text_color = get_theme_mod( 'whimsy_masthead_text_color' );   
//            if( get_theme_mod( 'whimsy_masthead_text_color' ) == true ) { echo '#masthead { color: ' . esc_html($whimsy_masthead_text_color) . '; }'; }
//            
//            $whimsy_site_title_color = get_theme_mod( 'whimsy_site_title_color' );   
//            if( get_theme_mod( 'whimsy_site_title_color' ) == true ) { echo '.site-branding > hgroup > h1.site-title a { color: ' . esc_html($whimsy_site_title_color) . '; }'; }
//            
//            $whimsy_site_desc_color = get_theme_mod( 'whimsy_site_desc_color' );   
//            if( get_theme_mod( 'whimsy_site_desc_color' ) == true ) { echo '.site-branding > hgroup > h2.site-description { color: ' . esc_html($whimsy_site_desc_color) . '; }'; }
//
//
//            if ( class_exists( 'woocommerce' ) ) { /* WooCommerce Styles*/
//                echo '.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce-page .shipping-calculator-button, #infinite-handle span, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-cart .wc-proceed-to-checkout { color: ' . esc_html($whimsy_link_color) . '; border-color: 1px solid ' . esc_html($whimsy_link_color) . ' }';
//            } 
//
//            echo '</style>';
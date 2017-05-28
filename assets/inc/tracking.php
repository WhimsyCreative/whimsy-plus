<?php
// Create a helper function for easy SDK access.
function whimsy_plus_sdk() {
    global $whimsy_plus_sdk;

    if ( ! isset( $whimsy_plus_sdk ) ) {
	    // Include Freemius SDK.
	    $theme_root = get_theme_root();
	    if ( file_exists( $theme_root . '/whimsy-framework/freemius/start.php' ) ) {
		    // Try to load SDK from parent theme's folder.
		    require_once $theme_root . '/whimsy-framework/freemius/start.php';
	    } else {
		    require_once dirname(__FILE__) . '/tracking/start.php';
	    }

        $whimsy_plus_sdk = fs_dynamic_init( array(
            'id'                  => '837',
            'slug'                => 'whimsy-plus',
            'type'                => 'plugin',
            'public_key'          => 'pk_dea4846c89ac9afd2a3d33f6eb3b2',
            'is_premium'          => true,
            'is_premium_only'     => true,
            'has_paid_plans'      => true,
            'is_org_compliant'    => false,
            'parent'              => array(
                'id'         => '818',
                'slug'       => 'whimsy-framework',
                'public_key' => 'pk_34b9d048febd4f348c687313cf262',
                'name'       => 'Whimsy Framework',
            ),
            'menu'                => array(
	            'slug'           => 'whimsy-plus',
	            'first-path'     => 'themes.php?page=whimsy-plus',
	            'contact'        => false,
	            'support'        => false,
	            'parent'         => array(
		            'slug' => 'themes.php',
	            ),
            ),
        ) );
    }

    return $whimsy_plus_sdk;
}

function whimsy_start_freemius() {
	$theme = wp_get_theme(); // gets the current theme

    // Init Freemius.
	whimsy_plus_sdk();
}

if ( 0 == did_action( 'after_setup_theme' ) ) {
	add_action( 'after_setup_theme', 'whimsy_start_freemius' );
} else {
	/**
	 * This makes sure that if the theme was already loaded
	 * before the plugin, it will run Freemius right away.
	 *
	 * This is crucial for the plugin's activation hook.
	 */
	whimsy_start_freemius();
}
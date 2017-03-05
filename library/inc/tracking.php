<?php
// Create a helper function for easy SDK access.
function whimsy_plus_sdk() {
    global $whimsy_plus_sdk;

    if ( ! isset( $whimsy_plus_sdk ) ) {
        // Include Freemius SDK.
        require_once get_template_directory() . '/library/inc/tracking/start.php';

        $whimsy_plus_sdk = fs_dynamic_init( array(
            'id'                  => '837',
            'slug'                => 'whimsy-plus',
            'type'                => 'plugin',
            'public_key'          => 'pk_dea4846c89ac9afd2a3d33f6eb3b2',
            'is_premium'          => true,
            'has_premium_version' => true,
            'has_paid_plans'      => true,
            'is_org_compliant'    => false,
            'parent'              => array(
                'id'         => '818',
                'slug'       => 'whimsy-framework',
                'public_key' => 'pk_34b9d048febd4f348c687313cf262',
                'name'       => 'Whimsy Framework',
            ),
        ) );
    }

    return $whimsy_plus_sdk;
}

// Init Freemius.
whimsy_plus_sdk();

function whimsy_plus_sdk_settings_url() {
    return admin_url( 'themes.php?page=whimsy-plus' );
}

whimsy_plus_sdk()->add_filter( 'connect_url', 'whimsy_plus_sdk_settings_url' );
whimsy_plus_sdk()->add_filter( 'after_skip_url', 'whimsy_plus_sdk_settings_url' );
whimsy_plus_sdk()->add_filter( 'after_connect_url', 'whimsy_plus_sdk_settings_url' );
<?php
// Create a helper function for easy SDK access.
function whimsy_plus_sdk() {
    global $whimsy_plus_sdk;

    if ( ! isset( $whimsy_plus_sdk ) ) {
        // Include Freemius SDK.
        if ( file_exists( get_template_directory() . '/library/inc/tracking/start.php' ) ) {
            // Try to load SDK from parent plugin folder.
            require_once get_template_directory() . '/library/inc/tracking/start.php';
        } else {
        require_once plugin_dir_path( __FILE__ ) . '/tracking/start.php';
        }

        $whimsy_plus_sdk = fs_dynamic_init( array(
            'id'                  => '823',
            'slug'                => 'whimsy-plus',
            'type'                => 'plugin',
            'public_key'          => 'pk_2f2c82a81425bc445e329024ec112',
            'is_premium'          => true,
            'has_premium_version' => false,
            'has_paid_plans'      => true,
            'is_org_compliant'    => false,
            'parent'              => array(
                'id'         => '818',
                'slug'       => 'whimsy-framework',
                'public_key' => 'pk_34b9d048febd4f348c687313cf262',
                'name'       => 'Whimsy Framework',
            ),
            // Set the SDK to work in a sandbox mode (for development & testing).
            // IMPORTANT: MAKE SURE TO REMOVE SECRET KEY BEFORE DEPLOYMENT.
            'secret_key'          => 'sk_dI27}Q>y{eUk[D5uaNnurT-oRf?z#',
        ) );
    }

    return $whimsy_plus_sdk;
}

// Init Freemius.
whimsy_plus_sdk();
<?php
// Create a helper function for easy SDK access.
function whimsy_plus_tracking() {
    global $whimsy_plus_tracking;

    if ( ! isset( $whimsy_plus_tracking ) ) {
        // Include Freemius SDK.
        require_once plugin_dir_path( __FILE__ ) . '/tracking/start.php';

        $whimsy_plus_tracking = fs_dynamic_init( array(
            'id'                  => '820',
            'slug'                => 'whimsy-plus',
            'type'                => 'plugin',
            'public_key'          => 'pk_457b0dcef352fb190b9a65070755d',
            'is_premium'          => false,
            'has_premium_version' => false,
            'has_addons'          => false,
            'has_paid_plans'      => false,
            'is_org_compliant'    => true,
            'menu'                => array(
                'first-path'     => 'plugins.php',
                'account'        => false,
                'contact'        => false,
                'support'        => false,
            ),
        ) );

    return $whimsy_plus_tracking;
}
}
// Init Freemius.
whimsy_plus_tracking();
<?php
    
if (! defined( 'ABSPATH' )) {
    exit;
}
    
class WhimsyPlusInit
{
    var $licence;
            
    var $interface;
            
    /**
	*
	* Run on class construct
	*
	*/
    function __construct() {
        $this->licence = new WhimsyPlusLicense();
		$this->interface = new WhimsyPlusOptions();                    
		/* Define framework, parent theme, and child theme constants. */
		//add_action( 'init', array( $this, 'constants' ), 1 );
		/* Make sure Whimsy Framework is the active theme and init the plugin. */
        add_action( 'plugins_loaded', array( $this, 'whimsy_plus_init' ), 10 );
		/* Register each module as its own plugin. */
		add_action( 'tgmpa_register', array( $this, 'whimsy_plus_register_addons' ), 20  );
    }
        
	function constants() {

	}     

    function whimsy_plus_init() {
        $theme = wp_get_theme(); // gets the current theme
        if ( $this->licence->licence_key_verify() && 'Whimsy Framework' == $theme->name || 'Whimsy Framework' == $theme->parent_theme ) {
            // Init add-on.
            return new WhimsyPlus();
        }
    }

	function whimsy_plus_register_addons() {
		/*
		* Array of plugin arrays. Required keys are name and slug.
		* If the source is NOT from the .org repo, then source is also required.
		*/
		$plugins = array(

			array(
				'name'               => 'Colors', // The plugin name.
				'slug'               => 'whimsy-plus-colors', // The plugin slug (typically the folder name).
				'source'             => WHIMSY_PLUS_MODS . 'colors.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => 'WhimsyPlus', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			array(
				'name'               => 'Layout', // The plugin name.
				'slug'               => 'whimsy-plus-layout', // The plugin slug (typically the folder name).
				'source'             => WHIMSY_PLUS_MODS . 'layout.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => 'WhimsyPlus', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
			array(
				'name'               => 'Header', // The plugin name.
				'slug'               => 'whimsy-plus-header', // The plugin slug (typically the folder name).
				'source'             => WHIMSY_PLUS_MODS . 'header.zip', // The plugin source.
				'required'           => false, // If false, the plugin is only 'recommended' instead of required.
				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => 'WhimsyPlus', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),

		);

		$config = array(
			'id'           => 'whimsy-plus',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'whimsy-plus', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => false,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.

		);

	tgmpa( $plugins, $config );
}

}
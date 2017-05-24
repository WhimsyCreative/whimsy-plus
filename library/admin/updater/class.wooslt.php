<?php
    
if (! defined( 'ABSPATH' )) {
    exit;
}
    
class WOO_SLT
{
    var $licence;
            
    var $interface;
            
    /**
	*
	* Run on class construct
	*
	*/
    function __construct()
    {
        $this->licence              =   new WOO_SLT_licence();

        $this->interface            =   new WOO_SLT_options_interface();
                    
        add_action( 'plugins_loaded', array( $this, 'whimsy_plus_init' ), 10 );


    }
              
    function whimsy_plus_init()
    {
        $theme = wp_get_theme(); // gets the current theme
        if ( $this->licence->licence_key_verify() && 'Whimsy Framework' == $theme->name || 'Whimsy Framework' == $theme->parent_theme ) {
            // Init add-on.
            return new WhimsyPlus();
        }
    }
}
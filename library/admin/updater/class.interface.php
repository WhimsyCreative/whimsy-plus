<?php

if ( ! defined( 'ABSPATH' ) ) { exit;}

class WHIMSY_LICENSE {
    var $licence;
    var $interface;

    /**
    * 
    * Run on class construct
    * 
    */
    function __construct( ) 
        {
            $this->licence              =   new GET_WHIMSY_LICENSE(); 
            $this->interface            =   new WHIMSY_UPDATER_INTERFACE();                     
        }

} 
<?php
/*
 * Plugin Name: Whimsy+
 * Version: 1.0.8
 * Plugin URI: http://www.whimsycreative.co/framework/plus
 * Description: A plugin packed with awesome features for Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7.4
 *
 * Text Domain: whimsy-plus
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Natasha Cozad
 * @since 1.0.0
 */
    define('WOO_SLT_PATH', plugin_dir_path(__FILE__));
    define('WOO_SLT_URL', plugins_url('', __FILE__));
    define('WOO_SLT_APP_API_URL', 'https://whimsycreative.co/index.php');
    
    define('WOO_SLT_VERSION', '1.0.8');
    define('WOO_SLT_DB_VERSION', '1.0');
    
    define('WOO_SLT_PRODUCT_ID', 'whimsy_plus');
    define('WOO_SLT_INSTANCE', str_replace(array ("https://" , "http://"), "", network_site_url()));
   
    include_once(WOO_SLT_PATH . 'library/admin/updater/class.wooslt.php');
    include_once(WOO_SLT_PATH . 'library/admin/updater/class.licence.php');
    include_once(WOO_SLT_PATH . 'library/admin/updater/class.options.php');
    include_once(WOO_SLT_PATH . 'library/admin/updater/class.updater.php');
	include_once(WOO_SLT_PATH . 'library/class-whimsy-plus.php');
		
    global $WOO_SLT;
    $WOO_SLT = new WOO_SLT();
	
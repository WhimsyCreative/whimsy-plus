<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
    
class WCWSL {
    private static $_this;
    /**
     * init
     *
     * @since 1.0.0
     * @return bool
     */
    public function __construct() {
        $this->SL_APP_API_URL = 'https://staging.whimsycreative.co/index.php'; //CHANGE
        $this->www = 'https://staging.whimsycreative.co/'; //CHANGE
        $this->SL_PRODUCT_ID = 'whimsy_plus'; //CHANGE
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $this->SL_INSTANCE = str_replace($protocol, "", get_bloginfo('wpurl'));
        $this->license_key = get_option('whimsy_license_key');
        //UPDATE
        $this->api_url = $this->SL_APP_API_URL;
        $this->slug = $this->SL_PRODUCT_ID;
        $this->plugin = 'whimsy-plus/whimsy-plus.php'; //CHANGE
        add_action('after_setup_theme', array($this, 'APTO_run_updater'));
        add_action('wp_ajax_wcwsl_licenseverify', array($this, 'form_wcwsl_licenseverify')); //AJAX ready for register license
        add_action('init', array($this, 'status_check'));
        return $this;
    }
    function APTO_run_updater() {
        // Take over the update check
        add_filter('pre_set_site_transient_update_plugins', array($this, 'check_for_plugin_update'));
        // Take over the Plugin info screen
        add_filter('plugins_api', array($this, 'plugins_api_call'), 10, 3);
    }
    function form_wcwsl_licenseverify() {
        $params = array();
        parse_str($_POST['data'], $params);
        $res = $this->activate_license($params['svipro_license_key']);
        header("Content-type: application/json");
        echo json_encode($res);
        die();
    }
    function activate_license($license_key = null) {
        if ($license_key == null)
            $license_key = $this->license_key;
        $args = array(
            'woo_sl_action' => 'activate',
            'licence_key' => $license_key,
            'product_unique_id' => $this->SL_PRODUCT_ID,
            'domain' => $this->SL_INSTANCE
        );
        $request_uri = $this->SL_APP_API_URL . '?' . http_build_query($args, '', '&');
        $data = wp_remote_get($request_uri);
        if (is_wp_error($data) || $data['response']['code'] != 200) {
            $res['status'] = false;
            $res['message'] = 'There was a problem establishing a connection to the API server. Please try again or open a ticket at <a href="http://www.rosendo.pt" target="_blank">rosendo.pt</a>';
        }
        $data_body = json_decode($data['body']);
        $data_body = $data_body[0];
        if (isset($data_body->status)) {
            if (($data_body->status == 'success' && $data_body->status_code == 's100') || ($data_body->status == 'error' && $data_body->status_code == 'e113')) {
                $res['status'] = true;
                $res['message'] = "The license is active and the software is active.";
                update_option('whimsy_license_key', $license_key);
                set_transient('whimsy_license_key', true, 1 * WEEK_IN_SECONDS);
                $this->license_key = $license_key;
            } else {
                $args = array('whimsy_license_key');
                $this->clearOptions($args);
                $res['status'] = 'warning';
                $res['message'] = '<h3 class="text-center">There was a problem activating the license!</h3>';
                $res['message'] .= '<h4>Did you previously activate the license in another domain?</h4>';
                $res['message'] .= '<ul class="sviul">'
                        . '<li>You can manage your license on your orders page <a href="'.$this->www.'/my-account/orders/">here</a>. ';
                $res['message'] .= 'Release your old site to be able to use the key in on new site.</li>'
                        . '<li><strong>MENU</strong>: Login &gt; My Account &gt; Orders &gt; License Manage</li>'
                        . '</ul>';
                $res['message'] .= '<br><h4>Not the case?</h4>';
                $res['message'] .= '<ul class="sviul"><li>Please open a ticket at <a href="'.$this->www.'" target="_blank">'.$this->www.'</a></li></ul>';
            }
        } else {
            $args = array('whimsy_license_key');
            $this->clearOptions($args);
            $res['status'] = false;
            $res['message'] = 'There was a problem establishing a connection to the API server. Please try again or open a ticket at <a href="'.$this->www.'" target="_blank">'.$this->www.'</a>';
        }
        return $res;
    }
    function status_check() {
        if (false === ( $value = get_transient('whimsy_license_key') )) {
            $args = array(
                'woo_sl_action' => 'status-check',
                'licence_key' => $this->license_key,
                'product_unique_id' => $this->SL_PRODUCT_ID,
                'domain' => $this->SL_INSTANCE
            );
            $request_uri = $this->SL_APP_API_URL . '?' . http_build_query($args, '', '&');
            $data = wp_remote_get($request_uri);
            if (is_wp_error($data) || $data['response']['code'] != 200)
                return;
            $data_body = json_decode($data['body']);
            $data_body = $data_body[0];
            if (isset($data_body->status)) {
                if ($data_body->status == 'error') {
                    $args = array('whimsy_license_key');
                    $this->clearOptions($args);
                }
            }
            set_transient('whimsy_license_key', true, 1 * WEEK_IN_SECONDS); // VALIDATE ONCE A WEEK
        }
    }
    public function check_for_plugin_update($checked_data) {
        if (empty($checked_data->checked) || !isset($checked_data->checked[$this->plugin]))
            return $checked_data;
        $request_string = $this->prepare_request('plugin_update');
        if ($request_string === FALSE)
            return $checked_data;
        // Start checking for an update
        $request_uri = $this->api_url . '?' . http_build_query($request_string, '', '&');
        $data = wp_remote_get($request_uri);
        if (is_wp_error($data) || $data['response']['code'] != 200)
            return $checked_data;
        $response_block = json_decode($data['body']);
        if (!is_array($response_block) || count($response_block) < 1) {
            return $checked_data;
        }
        //retrieve the last message within the $response_block
        $response_block = $response_block[count($response_block) - 1];
        $response = isset($response_block->message) ? $response_block->message : '';
        if (is_object($response) && !empty($response)) { // Feed the update data into WP updater
            //include slug and plugin data
            $response->slug = $this->slug;
            $response->plugin = $this->plugin;
            $checked_data->response[$this->plugin] = $response;
        }
        return $checked_data;
    }
    public function plugins_api_call($def, $action, $args) {
        if (!is_object($args) || !isset($args->slug) || $args->slug != $this->slug)
            return false;
        //$args->package_type = $this->package_type;
        $request_string = $this->prepare_request($action, $args);
        if ($request_string === FALSE)
            return new WP_Error('plugins_api_failed', __('An error occour when try to identify the plugin.', 'apto') . '&lt;/p> &lt;p>&lt;a href=&quot;?&quot; onclick=&quot;document.location.reload(); return false;&quot;>' . __('Try again', 'apto') . '&lt;/a>');
        $request_uri = $this->api_url . '?' . http_build_query($request_string, '', '&');
        $data = wp_remote_get($request_uri);
        if (is_wp_error($data) || $data['response']['code'] != 200)
            return new WP_Error('plugins_api_failed', __('An Unexpected HTTP Error occurred during the API request.', 'apto') . '&lt;/p> &lt;p>&lt;a href=&quot;?&quot; onclick=&quot;document.location.reload(); return false;&quot;>' . __('Try again', 'apto') . '&lt;/a>', $data->get_error_message());
        $response_block = json_decode($data['body']);
        //retrieve the last message within the $response_block
        $response_block = $response_block[count($response_block) - 1];
        $response = $response_block->message;
        if (is_object($response) && !empty($response)) { // Feed the update data into WP updater
            //include slug and plugin data
            $response->slug = $this->slug;
            $response->plugin = $this->plugin;
            $response->sections = (array) $response->sections;
            $response->banners = (array) $response->banners;
            return $response;
        }
    }
    public function prepare_request($action, $args = array()) {
        global $wp_version;
        return array(
            'woo_sl_action' => $action,
            'version' => SL_VERSION,
            'product_unique_id' => $this->SL_PRODUCT_ID,
            'licence_key' => $this->license_key,
            'domain' => $this->SL_INSTANCE,
            'wp-version' => $wp_version,
        );
    }
    function clearOptions($args) {
        foreach ($args as $value) {
            delete_option($value);
        }
    }
}
function WCWSL() {
    global $wcwsl_general;
    if (!isset($wcwsl_general)) {
        $wcwsl_general = new WCWSL();
    }
    return $wcwsl_general;
}
// initialize
WCWSL();

<?php

    class WHIMSY_UPDATER_INTERFACE
        {
         
            var $licence;
         
            function __construct()
                {
                    
                    $this->licence = new GET_WHIMSY_LICENSE();
                    
                    if (isset($_GET['page']) && ($_GET['page'] == 'woo-ms-options'  ||  $_GET['page'] == 'woo-options'))
                        {
                            add_action( 'init', array($this, 'options_update'), 1 );
                        }
                        
                    add_action( 'admin_menu', array($this, 'admin_menu') );
                    add_action( 'network_admin_menu', array($this, 'network_admin_menu') );
                                        
                    if(!$this->licence->licence_key_verify())
                        {
                            add_action('admin_notices', array($this, 'admin_no_key_notices'));
                            add_action('network_admin_notices', array($this, 'admin_no_key_notices'));
                        }
                    
                }
                
            function __destruct()
                {
                
                }
            
            function network_admin_menu()
                {
                    if(!$this->licence->licence_key_verify())
                        $hookID   = add_submenu_page('settings.php', 'WOOSL - Plugin Example', 'WOOSL - Plugin Example', 'manage_options', 'woo-ms-options', array($this, 'licence_form'));
                        else
                        $hookID   = add_submenu_page('settings.php', 'WOOSL - Plugin Example', 'WOOSL - Plugin Example', 'manage_options', 'woo-ms-options', array($this, 'licence_deactivate_form'));
                        
                    add_action('load-' . $hookID , array($this, 'load_dependencies'));
                    add_action('load-' . $hookID , array($this, 'admin_notices'));
                    
                    add_action('admin_print_styles-' . $hookID , array($this, 'admin_print_styles'));
                    add_action('admin_print_scripts-' . $hookID , array($this, 'admin_print_scripts'));
                }
                
            function admin_menu()
                {
                    if(!$this->licence->licence_key_verify())
                        $hookID   = add_options_page( 'WOOSL - Plugin Example', 'WOOSL - Plugin Example', 'manage_options', 'woo-options', array($this, 'licence_form'));
                        else
                        $hookID   = add_options_page( 'WOOSL - Plugin Example', 'WOOSL - Plugin Example', 'manage_options', 'woo-options', array($this, 'licence_deactivate_form'));
                        
                    add_action('load-' . $hookID , array($this, 'load_dependencies'));
                    add_action('load-' . $hookID , array($this, 'admin_notices'));
                    
                    add_action('admin_print_styles-' . $hookID , array($this, 'admin_print_styles'));
                    add_action('admin_print_scripts-' . $hookID , array($this, 'admin_print_scripts'));    
                    
                }
                
            function options_interface()
                {
                    
                    if(!$this->licence->licence_key_verify() && !is_multisite())
                        {
                            $this->licence_form();
                            return;
                        }
                        
                    if(!$this->licence->licence_key_verify() && is_multisite())
                        {
                            $this->licence_multisite_require_nottice();
                            return;
                        }
                }
            
            function options_update()
                {
                    
                    if (isset($_POST['slt_licence_form_submit']))
                        {
                            $this->licence_form_submit();
                            return;
                        }
            
                }

            function load_dependencies()
                {

                }
                
            function admin_notices()
                {
                    global $slt_form_submit_messages;
            
                    if($slt_form_submit_messages == '')
                        return;
                    
                    $messages = $slt_form_submit_messages;
 
                          
                    if(count($messages) > 0)
                        {
                            echo "<div id='notice' class='updated fade'><p>". implode("</p><p>", $messages )  ."</p></div>";
                        }

                }
                  
            function admin_print_styles()
                {
                    wp_register_style( 'whimsy_plus_admin', WHIMSY_PLUS_CSS . 'admin.css' );
                    wp_enqueue_style( 'whimsy_plus_admin' ); 
                }
                
            function admin_print_scripts()
                {

                }
            
            
            function admin_no_key_notices()
                {
                    if ( !current_user_can('manage_options'))
                        return;
                    
                    $screen = get_current_screen();
                        
                    if(is_multisite())
                        {
                            if(isset($screen->id) && $screen->id    ==  'settings_page_woo-ms-options-network')
                                return;
                            ?><div class="updated fade"><p><?php _e( "Whimsy+ Extension is inactive, please enter your", 'whimsy-plus' ) ?> <a href="<?php echo network_admin_url() ?>settings.php?page=woo-ms-options"><?php _e( "Licence Key", 'whimsy-plus' ) ?></a></p></div><?php
                        }
                        else
                        {
                            if(isset($screen->id) && $screen->id == 'settings_page_woo-options')
                                return;
                            
                            ?><div class="updated fade"><p><?php _e( "Whimsy+ Extension is inactive, please enter your", 'whimsy-plus' ) ?> <a href="options-general.php?page=woo-options"><?php _e( "Licence Key", 'whimsy-plus' ) ?></a></p></div><?php
                        }
                }

            function licence_form_submit()
                {
                    global $slt_form_submit_messages; 
                    
                    //check for de-activation
                    if (isset($_POST['slt_licence_form_submit']) && isset($_POST['slt_licence_deactivate']) && wp_verify_nonce($_POST['slt_license_nonce'],'slt_license'))
                        {
                            global $slt_form_submit_messages;
                            
                            $license_data = get_site_option('slt_license');                        
                            $license_key = $license_data['key'];

                            //build the request query
                            $args = array(
                                                'woo_sl_action'         => 'deactivate',
                                                'licence_key'           => $license_key,
                                                'product_unique_id'     => WHIMSY_UPDATER_PRODUCT_ID,
                                                'domain'                => WHIMSY_UPDATER_INSTANCE
                                            );
                            $request_uri    = WHIMSY_UPDATER_APP_API_URL . '?' . http_build_query( $args , '', '&');
                            $data           = wp_remote_get( $request_uri );
                            
                            if(is_wp_error( $data ) || $data['response']['code'] != 200)
                                {
                                    $slt_form_submit_messages[] .= __('There was a problem connecting to ', 'whimsy-plus') . WHIMSY_UPDATER_APP_API_URL;
                                    return;  
                                }
                                
                            $response_block = json_decode($data['body']);
                            //retrieve the last message within the $response_block
                            $response_block = $response_block[count($response_block) - 1];
                            $response = $response_block->message;
                            
                            if(isset($response_block->status))
                                {
                                    if($response_block->status == 'success' && $response_block->status_code == 's201')
                                        {
                                            //the license is active and the software is active
                                            $slt_form_submit_messages[] = $response_block->message;
                                            
                                            $license_data = get_site_option('slt_license');
                                            
                                            //save the license
                                            $license_data['key']          = '';
                                            $license_data['last_check']   = time();
                                            
                                            update_site_option('slt_license', $license_data);
                                        }
                                        
                                    else //if message code is e104  force de-activation
                                            if ($response_block->status_code == 'e002' || $response_block->status_code == 'e104')
                                                {
                                                    $license_data = get_site_option('slt_license');
                                            
                                                    //save the license
                                                    $license_data['key']          = '';
                                                    $license_data['last_check']   = time();
                                                    
                                                    update_site_option('slt_license', $license_data);
                                                }
                                        else
                                        {
                                            $slt_form_submit_messages[] = __('There was a problem deactivating the licence: ', 'whimsy-plus') . $response_block->message;
                                     
                                            return;
                                        }   
                                }
                                else
                                {
                                    $slt_form_submit_messages[] = __('There was a problem with the data block received from ' . WHIMSY_UPDATER_APP_API_URL, 'whimsy-plus');
                                    return;
                                }
                                
                            //redirect
                            $current_url    =   'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            
                            wp_redirect($current_url);
                            die();
                            
                        }   
                    
                    
                    
                    if (isset($_POST['slt_licence_form_submit']) && wp_verify_nonce($_POST['slt_license_nonce'],'slt_license'))
                        {
                            
                            $license_key = isset($_POST['license_key'])? sanitize_key(trim($_POST['license_key'])) : '';

                            if($license_key == '')
                                {
                                    $slt_form_submit_messages[] = __("Licence Key can't be empty", 'whimsy-plus');
                                    return;
                                }
                                
                            //build the request query
                            $args = array(
                                                'woo_sl_action'         => 'activate',
                                                'licence_key'       => $license_key,
                                                'product_unique_id'        => WHIMSY_UPDATER_PRODUCT_ID,
                                                'domain'          => WHIMSY_UPDATER_INSTANCE
                                            );
                            $request_uri    = WHIMSY_UPDATER_APP_API_URL . '?' . http_build_query( $args , '', '&');
                            $data           = wp_remote_get( $request_uri );
                            
                            if(is_wp_error( $data ) || $data['response']['code'] != 200)
                                {
                                    $slt_form_submit_messages[] .= __('There was a problem connecting to ', 'whimsy-plus') . WHIMSY_UPDATER_APP_API_URL;
                                    return;  
                                }
                                
                            $response_block = json_decode($data['body']);
                            //retrieve the last message within the $response_block
                            $response_block = $response_block[count($response_block) - 1];
                            $response = $response_block->message;
                            
                            if(isset($response_block->status))
                                {
                                    if($response_block->status == 'success' && $response_block->status_code == 's100')
                                        {
                                            //the license is active and the software is active
                                            $slt_form_submit_messages[] = $response_block->message;
                                            
                                            $license_data = get_site_option('slt_license');
                                            
                                            //save the license
                                            $license_data['key']          = $license_key;
                                            $license_data['last_check']   = time();
                                            
                                            update_site_option('slt_license', $license_data);

                                        }
                                        else
                                        {
                                            $slt_form_submit_messages[] = __('There was a problem activating the licence: ', 'whimsy-plus') . $response_block->message;
                                            return;
                                        }   
                                }
                                else
                                {
                                    $slt_form_submit_messages[] = __('There was a problem with the data block received from ' . WHIMSY_UPDATER_APP_API_URL, 'whimsy-plus');
                                    return;
                                }
                                
                            //redirect
                            $current_url    =   'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            
                            wp_redirect($current_url);
                            die();
                        }   
                    
                }
                
            function licence_form()
                {
                    ?>
                        <div class="wrap"> 
                            <div id="icon-settings" class="icon32"></div>
                            <h2><?php _e( "Software License", 'whimsy-plus' ) ?><br />&nbsp;</h2>
                            
                            
                            <form id="form_data" name="form" method="post">
                                <div class="postbox">
                                    
                                        <?php wp_nonce_field('slt_license','slt_license_nonce'); ?>
                                        <input type="hidden" name="slt_licence_form_submit" value="true" />
                                           
                                        

                                         <div class="section section-text ">
                                            <h4 class="heading"><?php _e( "License Key", 'whimsy-plus' ) ?></h4>
                                            <div class="option">
                                                <div class="controls">
                                                    <input type="text" value="" name="license_key" class="text-input">
                                                </div>
                                                <div class="explain"><?php _e( "Enter the License Key you got when bought this product. If you lost the key, you can always retrieve it from", 'whimsy-plus' ) ?> <a href="http://yourdomain.com/my-account/" target="_blank"><?php _e( "My Account", 'whimsy-plus' ) ?></a><br />
                                                <?php _e( "More keys can be generate from", 'whimsy-plus' ) ?> <a href="http://yourdomain.com/my-account/" target="_blank"><?php _e( "My Account", 'whimsy-plus' ) ?></a> 
                                                </div>
                                            </div> 
                                        </div>

                                    
                                </div>
                                
                                <p class="submit">
                                    <input type="submit" name="Submit" class="button-primary" value="<?php _e('Save', 'whimsy-plus') ?>">
                                </p>
                            </form> 
                        </div> 
                    <?php  
     
                }
            
            function licence_deactivate_form()
                {
                    $license_data = get_site_option('slt_license');
                    
                    if(is_multisite())
                        {
                            ?>
                                <div class="wrap"> 
                                    <div id="icon-settings" class="icon32"></div>
                                    <h2><?php _e( "General Settings", 'whimsy-plus' ) ?></h2>
                            <?php
                        }
                    
                    ?>
                        <div id="form_data">
                        <h2 class="subtitle"><?php _e( "Software License", 'whimsy-plus' ) ?></h2>
                        <div class="postbox">
                            <form id="form_data" name="form" method="post">    
                                <?php wp_nonce_field('slt_license','slt_license_nonce'); ?>
                                <input type="hidden" name="slt_licence_form_submit" value="true" />
                                <input type="hidden" name="slt_licence_deactivate" value="true" />

                                 <div class="section section-text ">
                                    <h4 class="heading"><?php _e( "License Key", 'whimsy-plus' ) ?></h4>
                                    <div class="option">
                                        <div class="controls">
                                            <?php  
                                                if($this->licence->is_local_instance())
                                                {
                                                ?>
                                                <p>Local instance, no key applied.</p>
                                                <?php   
                                                }
                                                else {
                                                ?>
                                            <p><b><?php echo substr($license_data['key'], 0, 20) ?>-xxxxxxxx-xxxxxxxx</b> &nbsp;&nbsp;&nbsp;<a class="button-secondary" title="Deactivate" href="javascript: void(0)" onclick="jQuery(this).closest('form').submit();">Deactivate</a></p>
                                            <?php } ?>
                                        </div>
                                        <div class="explain"><?php _e( "You can generate more keys from", 'whimsy-plus' ) ?> <a href="http://yourdomain.com/my-account/" target="_blank">My Account</a> 
                                        </div>
                                    </div> 
                                </div>
                             </form>
                        </div>
                        </div> 
                    <?php  
     
                    if(is_multisite())
                        {
                            ?>
                                </div>
                            <?php
                        }
                }
                
            function licence_multisite_require_nottice()
                {
                    ?>
                        <div class="wrap"> 
                            <div id="icon-settings" class="icon32"></div>
                            <h2><?php _e( "General Settings", 'whimsy-plus' ) ?></h2>

                            <h2 class="subtitle"><?php _e( "Software License", 'whimsy-plus' ) ?></h2>
                            <div id="form_data">
                                <div class="postbox">
                                    <div class="section section-text ">
                                        <h4 class="heading"><?php _e( "License Key Required", 'whimsy-plus' ) ?>!</h4>
                                        <div class="option">
                                            <div class="explain"><?php _e( "Enter the License Key you got when bought this product. If you lost the key, you can always retrieve it from", 'whimsy-plus' ) ?> <a href="http://www.nsp-code.com/premium-plugins/my-account/" target="_blank"><?php _e( "My Account", 'whimsy-plus' ) ?></a><br />
                                            <?php _e( "More keys can be generate from", 'whimsy-plus' ) ?> <a href="http://www.nsp-code.com/premium-plugins/my-account/" target="_blank"><?php _e( "My Account", 'whimsy-plus' ) ?></a> 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php
                
                }    

                
        }

                                   

?>
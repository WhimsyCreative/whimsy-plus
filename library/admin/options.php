<?php

include( dirname( __FILE__ ) . '/library/apf/admin-page-framework.php' );
 
// Extend the class
class APF_AddFields extends AdminPageFramework {
 
    /**
     * The set-up method which is triggered automatically with the 'wp_loaded' hook.
     * 
     * Here we define the setup() method to set how many pages, page titles and icons etc.
     */
    public function setUp() {
       
        // Create the root menu - specifies to which parent menu to add.
        // the available built-in root menu labels: Dashboard, Posts, Media, Links, Pages, Comments, Appearance, Plugins, Users, Tools, Settings, Network Admin
        $this->setRootMenuPage( 'Settings' ); 
       
        // Add the sub menus and the pages
        $this->addSubMenuItems(   
            array(
                'title'     => '2. Adding Forms',        // the page and menu title
                'page_slug' => 'my_first_forms',         // the page slug
            )
        );   
       
    }
    
    /**
     * One of the pre-defined methods which is triggered when the registered page loads.
     * 
     * Here we add form fields.
     * @callback        action      load_{page slug}
     */
    public function load_my_first_forms( $oAdminPage ) {
        
        $this->addSettingFields(
            array(    // Single text field
                'field_id'      => 'my_text_field',
                'type'          => 'text',
                'title'         => 'Text',
                'description'   => 'Type something here.',   
            ),
            array(    // Text Area
                'field_id'      => 'my_textarea_field',
                'type'          => 'textarea',
                'title'         => 'Single Text Area',
                'description'   => 'Type a text string here.',
                'default'       => 'Hello World! This is set as the default string.',
            ),   
            array( // Submit button
                'field_id'      => 'submit_button',
                'type'          => 'submit',
            )   
        );         
        
    }
    
    /**
     * One of the pre-defined methods which is triggered when the page contents is going to be rendered.
     * @callback        action      do_{page slug}
     */
    public function do_my_first_forms() {
                   
        // Show the saved option value.
        // The extended class name is used as the option key. This can be changed by passing a custom string to the constructor.
        echo '<h3>Saved Fields</h3>';
        echo '<pre>my_text_field: ' . AdminPageFramework::getOption( 'APF_AddFields', 'my_text_field', 'default text value' ) . '</pre>';
        echo '<pre>my_textarea_field: ' . AdminPageFramework::getOption( 'APF_AddFields', 'my_textarea_field', 'default text value' ) . '</pre>';
        
        echo '<h3>Show all the options as an array</h3>';
        echo $this->oDebug->get( AdminPageFramework::getOption( 'APF_AddFields' ) );
       
    }
   
}
 
// Instantiate the class object.
new APF_AddFields;
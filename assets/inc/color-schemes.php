<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Whimsy_Colors {

	/**
	 * The single instance of Whimsy_Colors.
	 * @var 	object
	 * @access  private
	 * @since 	1.0.0
	 */
	private static $_instance = null;

	/**
	 * Settings class object
	 * @var     object
	 * @access  public
	 * @since   1.0.0
	 */
	public $settings = null;

	/**
	 * The version number.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $_version;

	/**
	 * The token.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $_token;

	/**
	 * The main plugin file.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $file;

	/**
	 * The main plugin directory.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $dir;

	/**
	 * The plugin assets directory.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $assets_dir;

	/**
	 * The plugin assets URL.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $assets_url;

	/**
	 * Suffix for Javascripts.
	 * @var     string
	 * @access  public
	 * @since   1.0.0
	 */
	public $script_suffix;

	/**
	 * Constructor function.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function __construct ( $file = '', $version = '1.0.1' ) {
		$this->_version = $version;
		$this->_token = 'whimsy_colors';

		// Load plugin environment variables
		$this->file = $file;
		$this->dir = dirname( $this->file );
		$this->assets_dir = trailingslashit( $this->dir ) . 'assets';
		$this->assets_url = esc_url( trailingslashit( plugins_url( '/assets/', $this->file ) ) );

		$this->script_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		register_activation_hook( $this->file, array( $this, 'install' ) );
        
		// Load frontend JS & CSS
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 10 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 10 );
        
        // Load post type
		$this->whimsy_colors_init();
		add_action( 'init', array( $this, 'whimsy_colors_init' ), 0 );
        
        // Load single template
        add_filter( 'single_template', array( $this, 'whimsy_colors_load_default_template_single' ), 0 );

		// Handle localisation
		$this->load_plugin_textdomain();
		add_action( 'init', array( $this, 'load_localisation' ), 0 );
        
        
	} // End __construct ()

	/**
	 * Initiate post type for color posts.
	 * @access  public
	 * @since   1.0.0
	 * @return void
	 */
	public function whimsy_colors_init () {
		if ( ! function_exists('whimsy_colors_post_type') ) {

        // Register Custom Post Type
        function whimsy_colors_post_type() {

            $labels = array(
                'name'                  => _x( 'Colors', 'Post Type General Name', 'whimsy-colors' ),
                'singular_name'         => _x( 'Scheme', 'Post Type Singular Name', 'whimsy-colors' ),
                'menu_name'             => __( 'Colors', 'whimsy-colors' ),
                'name_admin_bar'        => __( 'Scheme', 'whimsy-colors' ),
                'parent_item_colon'     => __( 'Parent Item:', 'whimsy-colors' ),
                'all_items'             => __( 'All Items', 'whimsy-colors' ),
                'add_new_item'          => __( 'Add New Scheme', 'whimsy-colors' ),
                'add_new'               => __( 'Add New Scheme', 'whimsy-colors' ),
                'new_item'              => __( 'New Item', 'whimsy-colors' ),
                'edit_item'             => __( 'Edit Item', 'whimsy-colors' ),
                'update_item'           => __( 'Update Scheme', 'whimsy-colors' ),
                'view_item'             => __( 'View Scheme', 'whimsy-colors' ),
                'search_items'          => __( 'Search Colors', 'whimsy-colors' ),
                'not_found'             => __( 'Not found', 'whimsy-colors' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'whimsy-colors' ),
                'items_list'            => __( 'Items list', 'whimsy-colors' ),
                'items_list_navigation' => __( 'Items list navigation', 'whimsy-colors' ),
                'filter_items_list'     => __( 'Filter items list', 'whimsy-colors' ),
            );
            $rewrite = array(
                'slug'                  => 'scheme',
                'with_front'            => true,
                'pages'                 => true,
                'feeds'                 => true,
            );
            $args = array(
                'label'                 => __( 'Scheme', 'whimsy-colors' ),
                'description'           => __( 'Color Scheme for The Fanciful', 'whimsy-colors' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'thumbnail', 'revisions', 'page-attributes', ),
                'taxonomies'            => array( 'post_tag' ),
                'hierarchical'          => true,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 7,
                'menu_icon'             => 'dashicons-art',
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => 'colors',
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'rewrite'               => $rewrite,
                'capability_type'       => 'post',
            );
            register_post_type( 'whimsy_colors', $args );

        }
        add_action( 'init', 'whimsy_colors_post_type', 0 );

}
	} // End load_whimsy_colors_post_type ()

	/**
	 * Load frontend CSS.
	 * @access  public
	 * @since   1.0.0
	 * @return void
	 */
	public function enqueue_styles () {
        
		if ( is_post_type_archive( 'whimsy-colors' ) ) {
            wp_register_style( $this->_token . '-colors', esc_url( $this->assets_url ) . 'css/colors.css', array(), $this->_version );
            wp_enqueue_style( $this->_token . '-colors' );
        }
        
	} // End enqueue_styles ()

	/**
	 * Load frontend Javascript.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function enqueue_scripts () {
        
        if ( is_post_type_archive( 'whimsy-colors' ) ) {

            wp_register_script( $this->_token . '-frontend', esc_url( $this->assets_url ) . 'js/frontend' . $this->script_suffix . '.js', array( 'jquery' ), $this->_version );
            wp_enqueue_script( $this->_token . '-frontend' );
        
            wp_register_script( $this->_token . '-vibrant', esc_url( $this->assets_url ) . 'js/Vibrant' . $this->script_suffix . '.js', array( 'jquery' ), $this->_version );
            wp_enqueue_script( $this->_token . '-vibrant' );
        }
        
	} // End enqueue_scripts ()
	/**
	 * Load plugin localisation
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_localisation () {
		load_plugin_textdomain( 'whimsy-colors', false, dirname( plugin_basename( $this->file ) ) . '/lang/' );
	} // End load_localisation ()

	/**
	 * Load plugin textdomain
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_plugin_textdomain () {
	    $domain = 'whimsy-colors';

	    $locale = apply_filters( 'plugin_locale', get_locale(), $domain );

	    load_textdomain( $domain, WP_LANG_DIR . '/' . $domain . '/' . $domain . '-' . $locale . '.mo' );
	    load_plugin_textdomain( $domain, false, dirname( plugin_basename( $this->file ) ) . '/lang/' );
	} // End load_plugin_textdomain ()

	/**
	 * Load default templates
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
    
    public function whimsy_colors_load_default_template_single($single_template) 
    {
         global $post;

         if ($post->post_type == 'whimsy_colors') 
         {
              $single_template = plugin_dir_path( __FILE__ ) . 'templates/single-colors.php';
         }

         return $single_template;
    }
    
    /**
	 * Main Whimsy_Colors Instance
	 *
	 * Ensures only one instance of Whimsy_Colors is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see Whimsy_Colors()
	 * @return Main Whimsy_Colors instance
	 */
	public static function instance ( $file = '', $version = '1.0.1' ) {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self( $file, $version );
		}
		return self::$_instance;
	} // End instance ()

	/**
	 * Cloning is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __clone () {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), $this->_version );
	} // End __clone ()

	/**
	 * Unserializing instances of this class is forbidden.
	 *
	 * @since 1.0.0
	 */
	public function __wakeup () {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?' ), $this->_version );
	} // End __wakeup ()

	/**
	 * Installation. Runs on activation.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function install () {
		$this->_log_version_number();
	} // End install ()

	/**
	 * Log the plugin version number.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	private function _log_version_number () {
		update_option( $this->_token . '_version', $this->_version );
	} // End _log_version_number ()

}
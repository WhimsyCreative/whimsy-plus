<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Whimsy_Portfolio {

	/**
	 * The single instance of whimsy_portfolio.
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
	public function __construct ( $file = '', $version = '1.0.0' ) {
		$this->_version = $version;
		$this->_token = 'whimsy_portfolio';

		// Load plugin environment variables
		$this->file = $file;
		$this->dir = dirname( $this->file );
		$this->assets_dir = trailingslashit( $this->dir ) . 'library';
		$this->assets_url = esc_url( trailingslashit( plugins_url( '/library/', $this->file ) ) );

		$this->script_suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		register_activation_hook( $this->file, array( $this, 'install' ) );
        
		// Load frontend JS & CSS
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 10 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 10 );
        
        // Load post type
		$this->whimsy_portfolio_init();
		add_action( 'init', array( $this, 'whimsy_portfolio_init' ), 0 );
        
        // Load single template
        add_filter( 'single_template', array( $this, 'whimsy_portfolio_load_default_template_single' ), 0 );

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
	public function whimsy_portfolio_init () {
		if ( ! function_exists('whimsy_portfolio_post_type') ) {

        // Register Custom Post Type
        function whimsy_portfolio_post_type() {

            $labels = array(
                'name'                  => _x( 'Portfolio', 'Post Type General Name', 'whimsy-portfolio' ),
                'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'whimsy-portfolio' ),
                'menu_name'             => __( 'Portfolio', 'whimsy-portfolio' ),
                'name_admin_bar'        => __( 'Project', 'whimsy-portfolio' ),
                'parent_item_colon'     => __( 'Parent Item:', 'whimsy-portfolio' ),
                'all_items'             => __( 'All Items', 'whimsy-portfolio' ),
                'add_new_item'          => __( 'Add New Scheme', 'whimsy-portfolio' ),
                'add_new'               => __( 'Add New Scheme', 'whimsy-portfolio' ),
                'new_item'              => __( 'New Item', 'whimsy-portfolio' ),
                'edit_item'             => __( 'Edit Item', 'whimsy-portfolio' ),
                'update_item'           => __( 'Update Project', 'whimsy-portfolio' ),
                'view_item'             => __( 'View Project', 'whimsy-portfolio' ),
                'search_items'          => __( 'Search Portfolio', 'whimsy-portfolio' ),
                'not_found'             => __( 'Not found', 'whimsy-portfolio' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'whimsy-portfolio' ),
                'items_list'            => __( 'Items list', 'whimsy-portfolio' ),
                'items_list_navigation' => __( 'Items list navigation', 'whimsy-portfolio' ),
                'filter_items_list'     => __( 'Filter items list', 'whimsy-portfolio' ),
            );
            $rewrite = array(
                'slug'                  => 'project',
                'with_front'            => true,
                'pages'                 => true,
                'feeds'                 => true,
            );
            $args = array(
                'label'                 => __( 'Project', 'whimsy-portfolio' ),
                'description'           => __( 'Add a new project to your portfolio.', 'whimsy-portfolio' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'thumbnail', 'revisions', 'page-attributes', ),
                'taxonomies'            => array( 'post_tag' ),
                'hierarchical'          => true,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 7,
                'menu_icon'             => 'dashicons-portfolio',
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => 'colors',
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'rewrite'               => $rewrite,
                'capability_type'       => 'post',
            );
            register_post_type( 'whimsy_portfolio', $args );

        }
        add_action( 'init', 'whimsy_portfolio_post_type', 0 );

}
	} // End load_whimsy_portfolio_post_type ()

	/**
	 * Load frontend CSS.
	 * @access  public
	 * @since   1.0.0
	 * @return void
	 */
	public function enqueue_styles () {
        
		if ( is_post_type_archive( 'whimsy-portfolio' ) ) {
            wp_register_style( $this->_token . '-portfolio', esc_url( $this->assets_url ) . 'css/portfolio.css', array(), $this->_version );
            wp_enqueue_style( $this->_token . '-portfolio' );
        }
        
	} // End enqueue_styles ()

	/**
	 * Load frontend Javascript.
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function enqueue_scripts () {
        
        if ( is_post_type_archive( 'whimsy-portfolio' ) ) {

        }
        
	} // End enqueue_scripts ()
	/**
	 * Load plugin localisation
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_localisation () {
		load_plugin_textdomain( 'whimsy-portfolio', false, dirname( plugin_basename( $this->file ) ) . '/lang/' );
	} // End load_localisation ()

	/**
	 * Load plugin textdomain
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
	public function load_plugin_textdomain () {
	    $domain = 'whimsy-portfolio';

	    $locale = apply_filters( 'plugin_locale', get_locale(), $domain );

	    load_textdomain( $domain, WP_LANG_DIR . '/' . $domain . '/' . $domain . '-' . $locale . '.mo' );
	    load_plugin_textdomain( $domain, false, dirname( plugin_basename( $this->file ) ) . '/language/' );
	} // End load_plugin_textdomain ()

	/**
	 * Load default templates
	 * @access  public
	 * @since   1.0.0
	 * @return  void
	 */
    
    public function whimsy_portfolio_load_default_template_single($single_template) 
    {
         global $post;

         if ($post->post_type == 'whimsy_portfolio') 
         {
              $single_template = plugin_dir_path( __FILE__ ) . 'templates/single-portfolio.php';
         }

         return $single_template;
    }
    
    /**
	 * Main whimsy_portfolio Instance
	 *
	 * Ensures only one instance of whimsy_portfolio is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @static
	 * @see whimsy_portfolio()
	 * @return Main whimsy_portfolio instance
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
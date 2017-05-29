<?php
/**
 * Welcome Page Class
 * @copyright   Copyright (c) 2015, Pippin Williamson
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.4
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WhimsyPlusAdmin Class
 *
 * A general class for About and Credits page.
 *
 * @since 1.4
 */
class WhimsyPlusAdmin {

	/**
	 * @var string The capability users should have to view the page
	 */
	public $minimum_capability = 'manage_options';

	/**
	 * Get things started
	 *
	 * @since 1.4
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menus') );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		add_action( 'admin_init', array( $this, 'init_settings'  ) );
		add_action( 'admin_init', array( $this, 'welcome'    ), 11 );
	}

	/**
	 * Register the Dashboard Pages which are later hidden but these pages
	 * are used to render the Welcome and Credits pages.
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function admin_menus() {

		// Whimsy+ Settings
		add_theme_page(
			__( 'Whimsy+', 'whimsy-plus' ),
			__( 'Whimsy+', 'whimsy-plus' ),
			$this->minimum_capability,
			'whimsy-plus',
			array( $this, 'settings_screen' )
		);
		// Changelog Page
		add_theme_page(
			__( 'Whimsy+ Changelog', 'whimsy-plus' ),
			__( 'Whimsy+ Changelog', 'whimsy-plus' ),
			$this->minimum_capability,
			'whimsy-plus-changelog',
			array( $this, 'changelog_screen' )
		);

		// Getting Started Page
		add_theme_page(
			__( 'Getting started with Whimsy+', 'whimsy-plus' ),
			__( 'Getting started with Whimsy+', 'whimsy-plus' ),
			$this->minimum_capability,
			'whimsy-plus-getting-started',
			array( $this, 'getting_started_screen' )
		);

		// Getting Started Page
		add_theme_page(
			__( 'About', 'whimsy-plus' ),
			__( 'About', 'whimsy-plus' ),
			$this->minimum_capability,
			'whimsy-plus-about',
			array( $this, 'about_screen' )
		);
		// Now remove them from the menus so plugins that allow customizing the admin menu don't show them
		remove_submenu_page( 'themes.php', 'whimsy-plus-changelog' );
		remove_submenu_page( 'themes.php', 'whimsy-plus-getting-started' );
		remove_submenu_page( 'themes.php', 'whimsy-plus-about' );
		remove_submenu_page( 'themes.php', 'whimsy-plus-license' );
	}

	/**
	 * Hide Individual Dashboard Pages
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	static function admin_head() {
		?>
		<style type="text/css" media="screen">
			/*<![CDATA[*/

			.whimsy-plus-wrap .whimsy-badge { float: left; margin: 15px 45px 15px 0; max-width: 200px; border:0;  }
            .whimsy-plus-wrap #whimsy-header { margin-bottom: 15px; }
			.whimsy-plus-wrap #whimsy-header h1 { margin-bottom: 15px !important; }
			.whimsy-plus-wrap h2.nav-tab-wrapper { display: none; }
			.whimsy-plus-wrap .about-text { margin: 0 0 15px; }
			.whimsy-plus-wrap .feature-section { margin-top: 20px; }
			.whimsy-plus-wrap .feature-section-content,
			.whimsy-plus-wrap .feature-section-media { width: 50%; box-sizing: border-box; }
			.whimsy-plus-wrap .feature-section-content { width: 75%; float: left; padding-right: 50px; }
			.whimsy-plus-wrap .feature-section-content h4 { margin: 0 0 1em; }
			.whimsy-plus-wrap .feature-section-media { float: right; text-align: right; margin-bottom: 20px; }
			.whimsy-plus-wrap .feature-section-media img { border: 1px solid #ddd; max-width: 200px; }
			.whimsy-plus-wrap .feature-section:not(.under-the-hood) .col { margin-top: 0; }
			/* responsive */
			@media all and ( max-width: 782px ) {
				.whimsy-plus-wrap .feature-section-content,
				.whimsy-plus-wrap .feature-section-media { float: none; padding-right: 0; width: 100%; text-align: left; }
				.whimsy-plus-wrap .feature-section-media img { float: none; margin: 0 0 20px; }
			}
			/*]]>*/
		</style>
		<?php
	}

	/**
	 * Hide Individual Dashboard Pages
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	static function admin_scripts( ) {
        wp_enqueue_script( 'whimsy_admin_js', WHIMSY_PLUS_JS . 'admin.js', array( 'jquery' ), '1.0' );
	}

	/**
	 * Welcome message
	 *
	 * @access public
	 * @since 2.5
	 * @return void
	 */
	public function welcome_message() {
		list( $display_version ) = explode( '-', WHIMSY_PLUS_VERSION );
		?>
		<div id="whimsy-header">
			<img class="whimsy-badge" src="<?php echo WHIMSY_PLUS_IMG . 'whimsy-plus-logo.png'; ?>" alt="<?php _e( 'Whimsy Plus', 'whimsy-plus' ); ?>" / >
			<h3><?php printf( __( 'Welcome to Whimsy+ %s', 'whimsy-plus' ), $display_version ); ?></h3>
			<p class="about-text">
				<?php printf( __( 'Thank you for updating to the latest version! Whimsy+ version %s is ready to help you build something beautiful!', 'whimsy-plus' ), $display_version ); ?>
			</p>
		</div>
		<?php
	}

	/**
	 * Navigation tabs
	 *
	 * @access public
	 * @since 1.9
	 * @return void
	 */
	public function tabs() {
		$selected = isset( $_GET['page'] ) ? $_GET['page'] : 'whimsy-plus';
		?>
		<h1 class="nav-tab-wrapper">
			<a class="nav-tab <?php echo $selected == 'whimsy-plus' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'whimsy-plus' ), 'themes.php' ) ) ); ?>">
				<?php _e( 'Add-Ons', 'whimsy-plus' ); ?>
			</a>
			<a class="nav-tab <?php echo $selected == 'whimsy-plus-license' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'whimsy-plus-license' ), 'themes.php' ) ) ); ?>">
				<?php _e( 'License', 'whimsy-plus' ); ?>
			</a>
			<a class="nav-tab <?php echo $selected == 'whimsy-plus-about' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'whimsy-plus-about' ), 'themes.php' ) ) ); ?>">
				<?php _e( "What's New", 'whimsy-plus' ); ?>
			</a>
			<a class="nav-tab <?php echo $selected == 'whimsy-plus-changelog' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'whimsy-plus-changelog' ), 'themes.php' ) ) ); ?>">
				<?php _e( 'Changelog', 'whimsy-plus' ); ?>
			</a>
		</h1>
		<?php
	}

	/**
	 * Render About Screen
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function about_screen() {
		?>
		<div class="wrap about-wrap whimsy-plus-wrap">
			<?php
				// load welcome message and content tabs
				$this->welcome_message();
				$this->tabs();
			?>
			<div class="changelog">
				<h3><?php _e( 'Design a stylish, modern website faster than ever', 'whimsy-plus' );?></h3>
				<div class="feature-section">
					<div class="feature-section-content">
						<p><?php _e( 'Dramatically change the entire look of your website with easy-to-use layout & display settings. ', 'whimsy-plus' );?></p>
						<h4><?php _e( 'Enhanced control of your website from the WordPress Customizer.', 'whimsy-plus' );?></h4>
						<p><?php _e( 'With Whimsy+ you have enhanced control over what colors & fonts are used in different places on your website.', 'whimsy-plus' );?></p>	
                        <p><?php _e( ' Easily change background colors, text colors, link and hover colors, for your menu, header, content and posts, sidebar, and footer all from the WordPress Customizer. ', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	public function init_settings() {

		register_setting(
			'theme_options_group',
			'advanced_options'
		);

		add_settings_section(
			'advanced_options_section',
			'',
			false,
			'advanced_options'
		);

	}
	/**
	 * Render Settings Screen
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	 */
	public function settings_screen() {
		?>
		<div class="wrap about-wrap whimsy-plus-wrap">
			<?php
				// Check required user capability
				if ( !current_user_can( 'manage_options' ) )  {
					wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'whimsy-plus' ) );
				}

				// load welcome message and content tabs
				$this->welcome_message();
				$this->tabs();				

				// Create an instance of our package class.
				$test_list_table = new TT_Example_List_Table();
				// Fetch, prepare, sort, and filter our data.
				$test_list_table->prepare_items();

				?>

				<form id="movies-filter" method="get">
					<!-- For plugins, we also need to ensure that the form posts back to our current page -->
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
					<!-- Now we can render the completed list table -->
					<?php $test_list_table->display() ?>
				</form>
			
		</div>
		<?php
	}

	/**
	 * Render Changelog Screen
	 *
	 * @access public
	 * @since 2.0.3
	 * @return void
	 */
	public function changelog_screen() {
		?>
		<div class="wrap about-wrap whimsy-plus-wrap">
			<?php
				// load welcome message and content tabs
				$this->welcome_message();
				$this->tabs();
			?>
			<div class="changelog">
				<h3><?php _e( 'Full Changelog', 'whimsy-plus' );?></h3>

				<div class="feature-section">
					<?php echo $this->parse_readme(); ?>
				</div>
			</div>
            
		</div>
		<?php
	}

	/**
	 * Parse the Whimsy Framework readme.txt file
	 *
	 * @since 1.0.0
	 * @return string $readme HTML formatted readme file
	 */
	public function parse_readme() {         
        
		$file = file_exists( WHIMSY_PLUS_PATH . 'readme.txt' ) ? WHIMSY_PLUS_PATH . 'readme.txt' : null;

		if ( ! $file ) {
			$readme = '<p>' . __( 'No valid changelog was found.', 'whimsy-plus' ) . '</p>';
		} else {
			$readme = file_get_contents( $file );
			$readme = nl2br( esc_html( $readme ) );
			$readme = explode( '== Changelog ==', $readme );
			$readme = end( $readme );

			$readme = preg_replace( '/`(.*?)`/', '<code>\\1</code>', $readme );
			$readme = preg_replace( '/[\040]\*\*(.*?)\*\*/', ' <strong>\\1</strong>', $readme );
			$readme = preg_replace( '/[\040]\*(.*?)\*/', ' <em>\\1</em>', $readme );
			$readme = preg_replace( '/= (.*?) =/', '<h4>\\1</h4>', $readme );
			$readme = preg_replace( '/\[(.*?)\]\((.*?)\)/', '<a href="\\2">\\1</a>', $readme );
		}

		return $readme;
        
    }    

	/**
	 * Sends user to the Welcome page on first activation of Whimsy Framework as well as each
	 * time Whimsy Framework is upgraded to a new version
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function welcome() {
		// Bail if no activation redirect
		if ( ! get_transient( '_whimsy_activation_redirect' ) )
			return;

		// Delete the redirect transient
		delete_transient( '_whimsy_activation_redirect' );

		// Bail if activating from network, or bulk
		if ( is_network_admin() || isset( $_GET['activate-multi'] ) )
			return;

		$upgrade = get_option( 'whimsy_version_upgraded_from' );

		if( ! $upgrade ) { // First time install
			wp_safe_redirect( admin_url( 'themes.php?page=whimsy-getting-started' ) ); exit;
		} else { // Update
			wp_safe_redirect( admin_url( 'themes.php?page=whimsy-plus' ) ); exit;
		}
	}

}

global $WhimsyPlusAdmin;
$WhimsyPlusAdmin = new WhimsyPlusAdmin();
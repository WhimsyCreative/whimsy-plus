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
 * Whimsy_Plus_Welcome Class
 *
 * A general class for About and Credits page.
 *
 * @since 1.4
 */
class Whimsy_Plus_Welcome {

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
		// About Page
		add_theme_page(
			__( 'Whimsy+', 'whimsy-plus' ),
			__( 'Whimsy+', 'whimsy-plus' ),
			$this->minimum_capability,
			'whimsy-plus',
			array( $this, 'about_screen' )
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
		// Now remove them from the menus so plugins that allow customizing the admin menu don't show them
		remove_submenu_page( 'themes.php', 'whimsy-plus-changelog' );
		remove_submenu_page( 'themes.php', 'whimsy-plus-getting-started' );
	}

	/**
	 * Hide Individual Dashboard Pages
	 *
	 * @access public
	 * @since 1.4
	 * @return void
	 */
	public function admin_head() {
		?>
		<style type="text/css" media="screen">
			/*<![CDATA[*/
			.whimsy-plus-wrap .whimsy-badge { float: right; border-radius: 4px; margin: 0 0 15px 15px; max-width: 200px; }
			.whimsy-plus-wrap #whimsy-header { margin-bottom: 15px; }
			.whimsy-plus-wrap #whimsy-header h1 { margin-bottom: 15px !important; }
			.whimsy-plus-wrap h2.nav-tab-wrapper { display: none; }
			.whimsy-plus-wrap .about-text { margin: 0 0 15px; max-width: 670px; }
			.whimsy-plus-wrap .feature-section { margin-top: 20px; }
			.whimsy-plus-wrap .feature-section-content,
			.whimsy-plus-wrap .feature-section-media { width: 50%; box-sizing: border-box; }
			.whimsy-plus-wrap .feature-section-content { float: left; padding-right: 50px; }
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
			<img class="whimsy-badge" src="<?php echo WHIMSY_PLUS_IMG . 'whimsy-plus-logo.svg'; ?>" alt="<?php _e( 'Whimsy Plus', 'whimsy-plus' ); ?>" / >
			<h1><?php printf( __( 'Welcome to Whimsy+ %s', 'whimsy-plus' ), $display_version ); ?></h1>
			<p class="about-text">
				<?php printf( __( 'Thank you for updating to the latest version! Whimsy Framework %s is ready to help you build something beautiful!', 'whimsy-plus' ), $display_version ); ?>
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
				<?php _e( "What's New", 'whimsy-plus' ); ?>
			</a>
			<a class="nav-tab <?php echo $selected == 'whimsy-plus-getting-started' ? 'nav-tab-active' : ''; ?>" href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'whimsy-plus-getting-started' ), 'themes.php' ) ) ); ?>">
				<?php _e( 'Getting Started', 'whimsy-plus' ); ?>
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
				<h3><?php _e( 'Additional Customer Emails', 'whimsy-plus' );?></h3>
				<div class="feature-section">
					<div class="feature-section-media">
						<img src="<?php echo WHIMSY_PLUS_URI . '-.png'; ?>"/>
					</div>
					<div class="feature-section-content">
						<p><?php _e( 'To help keep track of customers that have multiple email addresses, Whimsy Framework now supports storing additional emails on customers. During checkout, customers can use any email address assigned to their account to complete their purchase.', 'whimsy-plus' );?></p>

						<p><?php _e( 'Email addresses can be easily added by site administrators at anytime and will also be automatically registered when a customer makes a purchase with an additional email address.', 'whimsy-plus' );?></p>

						<h4><?php _e( 'Improved Help Text', 'whimsy-plus' );?></h4>
						<p><?php _e( 'While we strive to make Whimsy Framework live up to its name, there are always times when certain things are not quite clear. To help alleviate any uncertainty, we have introduced improved descriptions and help texts throughout the plugin. Along with the improved descriptions, we have also added tooltips in many places that offer verbose definitions of options.', 'whimsy-plus' );?></p>

						<h4><?php _e( 'Better Mobile Checkout', 'whimsy-plus' );?></h4>
						<p><?php _e( 'When purchasing with a debit or credit card from a mobile phone, the card number input field will now properly set the phone’s keyboard to a numerical keyboard.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>
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
	 * Render Getting Started Screen
	 *
	 * @access public
	 * @since 1.9
	 * @return void
	 */
	public function getting_started_screen() {
		?>
		<div class="wrap about-wrap whimsy-plus-wrap">
			<?php
				// load welcome message and content tabs
				$this->welcome_message();
				$this->tabs();
			?>
			<p class="about-description"><?php _e( 'Use the tips below to get started using Whimsy Framework. You will be up and running in no time!', 'whimsy-plus' ); ?></p>

			<div class="changelog">
				<h3><?php _e( 'Responsive Logo', 'whimsy-plus' );?></h3>
				<div class="feature-section">
					<div class="feature-section-media">
						<img src="<?php echo WHIMSY_PLUS_IMG . 'whimsy-customizer-site-identity.png'; ?>" class="whimsy-welcome-screenshots"/>
					</div>
					<div class="feature-section-content">
						<h4><?php _e( 'Mobile Logo', 'whimsy-plus' );?></h4>
						<p><?php _e( 'Whimsy Framework is responsive. There are two different ways to display your logo — desktop, and mobile. Around the size of the portrait view on an iPad (980px), the menu collapses into a mobile menu. The desktop logo is changed to a compact mobile logo, or if left empty, your site title.', 'whimsy-plus' );?></p>
						<h4><?php _e( 'Desktop Logo', 'whimsy-plus' );?></h4>
						<p><?php _e( 'Your desktop logo is the full-size logo that can be center-aligned or aligned to the left.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Display a Product Grid', 'whimsy-plus' );?></h3>
				<div class="feature-section">
					<div class="feature-section-media">
						<img src="<?php echo WHIMSY_PLUS_URI . 'assets/images/screenshots/grid.png'; ?>"/>
					</div>
					<div class="feature-section-content">
						<h4><?php _e( 'Flexible Product Grids','whimsy-plus' );?></h4>
						<p><?php _e( 'The [downloads] shortcode will display a product grid that works with any theme, no matter the size. It is even responsive!', 'whimsy-plus' );?></p>

						<h4><?php _e( 'Change the Number of Columns', 'whimsy-plus' );?></h4>
						<p><?php _e( 'You can easily change the number of columns by adding the columns="x" parameter:', 'whimsy-plus' );?></p>
						<p><pre>[downloads columns="4"]</pre></p>

						<h4><?php _e( 'Additional Display Options', 'whimsy-plus' ); ?></h4>
						<p><?php printf( __( 'The product grids can be customized in any way you wish and there is <a href="%s">extensive documentation</a> to assist you.', 'whimsy-plus' ), 'http://docs.easydigitaldownloads.com/' ); ?></p>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Purchase Buttons Anywhere', 'whimsy-plus' );?></h3>
				<div class="feature-section">
					<div class="feature-section-media">
						<img src="<?php echo WHIMSY_PLUS_URI . 'assets/images/screenshots/purchase-link.png'; ?>"/>
					</div>
					<div class="feature-section-content">
						<h4><?php _e( 'The <em>[purchase_link]</em> Shortcode','whimsy-plus' );?></h4>
						<p><?php _e( 'With easily accessible shortcodes to display purchase buttons, you can add a Buy Now or Add to Cart button for any product anywhere on your site in seconds.', 'whimsy-plus' );?></p>

						<h4><?php _e( 'Buy Now Buttons', 'whimsy-plus' );?></h4>
						<p><?php _e( 'Purchase buttons can behave as either Add to Cart or Buy Now buttons. With Buy Now buttons customers are taken straight to PayPal, giving them the most frictionless purchasing experience possible.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Need Help?', 'whimsy-plus' );?></h3>
				<div class="feature-section two-col">
					<div class="col">
						<h4><?php _e( 'Phenomenal Support','whimsy-plus' );?></h4>
						<p><?php _e( 'We do our best to provide the best support we can. If you encounter a problem or have a question, simply open a ticket using our <a href="https://easydigitaldownloads.com/support/?utm_source=plugin-welcome-page&utm_medium=support-link&utm_term=support&utm_campaign=Whimsy FrameworkWelcomeSupport">support form</a>.', 'whimsy-plus' );?></p>
					</div>
					<div class="col">
						<h4><?php _e( 'Need Even Faster Support?', 'whimsy-plus' );?></h4>
						<p><?php _e( 'Our <a href="https://easydigitaldownloads.com/support/pricing/?utm_source=plugin-welcome-page&utm_medium=support-link&utm_term=priority-support&utm_campaign=Whimsy FrameworkWelcomeSupport">Priority Support</a> system is there for customers that need faster and/or more in-depth assistance.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Stay Up to Date', 'whimsy-plus' );?></h3>
				<div class="feature-section two-col">
					<div class="col">
						<h4><?php _e( 'Get Notified of Extension Releases','whimsy-plus' );?></h4>
						<p><?php _e( 'New extensions that make Whimsy Framework even more powerful are released nearly every single week. Subscribe to the newsletter to stay up to date with our latest releases. <a href="https://easydigitaldownloads.com/subscribe" target="_blank">Sign up now</a> to ensure you do not miss a release!', 'whimsy-plus' );?></p>
					</div>
					<div class="col">
						<h4><?php _e( 'Get Alerted About New Tutorials', 'whimsy-plus' );?></h4>
						<p><?php _e( '<a href="https://easydigitaldownloads.com/subscribe" target="_blank">Sign up now</a> to hear about the latest tutorial releases that explain how to take Whimsy Framework further.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php _e( 'Extensions for Everything', 'whimsy-plus' );?></h3>
				<div class="feature-section two-col">
					<div class="col">
						<h4><?php _e( 'Over 250 Extensions','whimsy-plus' );?></h4>
						<p><?php _e( 'Add-on plugins are available that greatly extend the default functionality of Whimsy Framework. There are extensions for payment processors, such as Stripe and PayPal, extensions for newsletter integrations, and many, many more.', 'whimsy-plus' );?></p>
					</div>
					<div class="col">
						<h4><?php _e( 'Visit the Extension Store', 'whimsy-plus' );?></h4>
						<p><?php _e( '<a href="https://easydigitaldownloads.com/downloads/?utm_source=plugin-welcome-page&utm_medium=extensions-link&utm_term=extensions&utm_campaign=Whimsy FrameworkWelcomeExtensions" target="_blank">The Extensions store</a> has a list of all available extensions, including convenient category filters so you can find exactly what you are looking for.', 'whimsy-plus' );?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Parse the Whimsy Framework readme.txt file
	 *
	 * @since 2.0.3
	 * @return string $readme HTML formatted readme file
	 */
	public function parse_readme() {         
        
        $access_type = get_filesystem_method();
        if($access_type === 'direct')
        {
        /* you can safely run request_filesystem_credentials() without any issues and don't need to worry about passing in a URL */
        $creds = request_filesystem_credentials(site_url() . '/wp-admin/', '', false, false, array());

        /* initialize the API */
        if ( ! WP_Filesystem($creds) ) {
        /* any problems and we exit */
        return false;
        }	

        global $wp_filesystem;
        /* do our file manipulations below */

          $readme = '';

          $method = ''; //leave this empty to perform test for 'direct' writing
          $context = get_template_directory(); //target folder  
          /*
           * now $wp_filesystem could be used
           * get correct target file first
           **/
          $target_dir = $wp_filesystem->find_folder($context);
          $target_file = trailingslashit($target_dir).'readme.txt';

          /* read the file */
          if($wp_filesystem->exists($target_file)){ //check for existence

            $readme = $wp_filesystem->get_contents($target_file);
              
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
        else
        {
        /* don't have direct write access. Prompt user with our notice */
        add_action('admin_notices', 'you_admin_notice_function'); 	
        }

        
         
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
new Whimsy_Plus_Welcome();
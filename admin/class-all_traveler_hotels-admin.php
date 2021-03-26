<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    All_Traveler_Hotels
 * @subpackage All_Traveler_Hotels/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    All_Traveler_Hotels
 * @subpackage All_Traveler_Hotels/admin
 * @author     Your Name <email@example.com>
 */
class All_Traveler_Hotels_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in All_Traveler_Hotels_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The All_Traveler_Hotels_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/all_traveler_hotels-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		
 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in All_Traveler_Hotels_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The All_Traveler_Hotels_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/all_traveler_hotels-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_menus(){
		// add_menu_page('All Traveler Hotels', 'All Traveler Hotels', 'manage_options', 'all_traveler_hotels');
		// // add_submenu_page( 'all_traveler_hotels', 'All Traveler Hotels', 'All Traveler Hotels', [$this,'list_page'], 'my-top-level-slug');
		// add_menu_page(
		// 	__( 'Sample page', 'my-textdomain' ),
		// 	__( 'Sample menu', 'my-textdomain' ),
		// 	'manage_options',
		// 	'sample-page',
		// 	[$this,'list_page'],
		// 	'dashicons-schedule',
		// );
		// add_submenu_page( 'sample-page', 'API Credentials', 'API Credentials', [$this,'api_settings'], 'all_traveler_hotels/settings');


		add_menu_page('My Custom Page', 'My Custom Page', [$this,'manage_options'], 'my-top-level-slug');
add_submenu_page( 'my-top-level-slug', 'My Custom Page', 'My Custom Page',
    [$this,'manage_options'], 'my-top-level-slug');
add_submenu_page( 'my-top-level-slug', 'My Custom Submenu Page', 'My Custom Submenu Page',
    [$this,'manage_options'], 'my-secondary-slug');
	}
	function manage_options() {
		?>
		<h1>
			<?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?>
		</h1>
		<?php
	}
	function api_settings(){
		echo 'API Credentials';
	}
}
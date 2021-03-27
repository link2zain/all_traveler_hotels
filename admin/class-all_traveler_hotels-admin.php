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
		add_menu_page( 'All Travelers Hotels', 'All Travelers Hotels', 'manage_options', 'all_traveler_hotels/all_traveler_hotels.php', [$this,'myplguin_admin_page'], 'dashicons-tickets');
		add_submenu_page( 'all_traveler_hotels/all_traveler_hotels.php', 'Api Configuration', 'Api Configuration', 'manage_options', 'all_traveler_hotels/api_settings.php', [$this,'api_settings'] );

	}
	function myplguin_admin_page() {
		?>
		<h1>
			<?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?>
		</h1>
		<?php
	}
	function api_settings(){
		require_once 'partials/all_traveler_hotels-api-config.php';

	}
}

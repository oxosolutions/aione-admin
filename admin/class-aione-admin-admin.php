<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://oxosolutions.com/
 * @since      1.0.0
 *
 * @package    Aione_Admin
 * @subpackage Aione_Admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Aione_Admin
 * @subpackage Aione_Admin/admin
 * @author     OXO Solutions <oxosolutions@gmail.com>
 */
class Aione_Admin_Admin {

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
		
		
		// Load Redux extensions - MUST be loaded before your options are set
		if (file_exists(dirname(__FILE__).'/loader.php')) {
			require_once( dirname(__FILE__).'/loader.php' );
		}

		// Load the embedded Redux Framework
		if (file_exists(dirname(__FILE__).'/framework/ReduxCore/framework.php')) {
			require_once( dirname(__FILE__).'/framework/redux-framework.php' );
		}

		// Load the theme/plugin options
		if (file_exists(dirname(__FILE__).'/framework.php')) {
			require_once( dirname(__FILE__).'/framework.php' );
		}

		// Load the theme/plugin options
		if (file_exists(dirname(__FILE__).'/content.php')) {
			require_once( dirname(__FILE__).'/content.php' );
		}
		
		add_shortcode( 'aione-options', array($this, 'aione_options_shortcode') );

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
		 * defined in Aione_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Aione_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/aione-admin-admin.css', array(), $this->version, 'all' );

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
		 * defined in Aione_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Aione_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/js/aione-admin-admin.js', array( 'jquery' ), $this->version, false );

	}
	
	public function aione_options_shortcode( $atts ) {
		extract( shortcode_atts(
				array(
					
				), $atts )
		);
		
		global $theme_options;
		
		echo "<pre>";
		print_r($theme_options);
		echo "</pre>";
		
		
		
		


		
	} // End aione_options_shortcode()

}

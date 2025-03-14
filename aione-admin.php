<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Aione Admin
 * Plugin URI:        https://oxosolutions.com/products/wordpress-plugins/aione-admin/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.7.0.1
 * Author:            OXO Solutions®
 * Author URI:        https://oxosolutions.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aione-admin
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/oxosolutions/aione-admin
 * GitHub Branch: master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/* define('AIONE_PLUGIN_PATH', dirname(__FILE__));
define('AIONE_PLUGIN_URL', plugins_url( '', __FILE__ )); */

define('AIONE_PLUGIN_PATH', dirname(__FILE__)."/admin");
define('AIONE_PLUGIN_URL', plugins_url( '', __FILE__ )."/admin");



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aione-admin-activator.php
 */
function activate_aione_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aione-admin-activator.php';
	Aione_Admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aione-admin-deactivator.php
 */
function deactivate_aione_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aione-admin-deactivator.php';
	Aione_Admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aione_admin' );
register_deactivation_hook( __FILE__, 'deactivate_aione_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aione-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aione_admin() {

	$plugin = new Aione_Admin();
	$plugin->run();

}
run_aione_admin();

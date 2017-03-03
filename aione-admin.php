<?php
/*
Plugin Name: Aione Admin
Plugin URI: http://oxosolutions.com/products/wordpress-plugins/aione-admin/
Description: Aione Admin Options and Essentials
Version: 1.0.1.0
Author: OXO Solutions
Author URI: http://oxosolutions.com/
GitHub Plugin URI: https://github.com/oxosolutions/aione-admin
GitHub Branch: master
*/

define('AIONE_PLUGIN_PATH', dirname(__FILE__));
define('AIONE_PLUGIN_URL', plugins_url( '', __FILE__ ));

// Load the TGM init if it exists
/*
if (file_exists(dirname(__FILE__).'/tgm/tgm-init.php')) {
    require_once( dirname(__FILE__).'/tgm/tgm-init.php' );
}
*/



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

// Load the theme/plugin options
/*
if (file_exists(dirname(__FILE__).'admin/admin-init.php')) {
    require_once( dirname(__FILE__).'admin/admin-init.php' );
	
}
*/
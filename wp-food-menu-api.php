<?php
/** 
 * @package WpFoodMenuApi
*/
/*
* Plugin Name:  WP Food Menu API
* Plugin URI:   https://wordpress.org/plugins/wp-food-menu-api/
* Description:  WP Food Menu API requires Food Menu plugin, it will retrieve all your product including categories using api.
* Author:       Jundell Agbo
* Version:      2.1
* Text Domain:  wp-food-menu-api
* Domain Path: /languages
* Author URI:   http://cordovafreelance.uphero.com/
*/

defined( 'ABSPATH' ) or die;

// Require once the Composer Autoload
if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Runs Plugin Activation
 */
register_activation_hook( __FILE__, array( 'Inc\\Base\\Activate', 'activate' ) );

/**
 * Runs Plugin Deactivation
 */
register_deactivation_hook( __FILE__, array( 'Inc\\Base\\Deactivate', 'deactivate' ) );

/**
 * Runs Plugin Uninstall
 */
register_uninstall_hook( __FILE__, array( 'Inc\\Base\\Uninstall', 'uninstall' ) );

// Instantiate all classes with Init class
if( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}

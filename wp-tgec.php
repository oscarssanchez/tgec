<?php
/*
Plugin Name: The Great Events Calendar
Plugin URI: https://wordpress.org/
Description:  Aun no tiene
Version: 0.1.0
Author: Oscar Sanchez Sanchez
Author URI:
Text Domain: PUTA NO SE
Domain Path: /languages
*/

/*Registers the plugin */



require_once( 'inc/class-tgec.php' );
require_once( 'inc/class-tgec-admin.php');

register_activation_hook( __FILE__, array( 'Tgec', 'activate' ) );
add_action( 'plugins_loaded', array( 'Tgec', 'load' ) );





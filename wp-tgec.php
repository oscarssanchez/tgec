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

defined( 'ABSPATH' ) or die( 'Access denied' );

if( is_admin() ){
    require_once( 'inc/class-tgec.php' );
    require_once( 'inc/class-tgec-admin.php');
    require_once( 'inc/class-tgec-db.php');
    require_once( 'inc/class-tgec-admin-list-table.php' );
} else{
    echo esc_html( 'Sorry, you cannot handle this plugin' );
}

register_activation_hook( __FILE__, array( 'Tgec', 'activate' ) );
add_action( 'plugins_loaded', array( 'Tgec', 'load' ) );

<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/02/18
 * Time: 02:13 PM
 */

class Tgec_DB{

    const PLUGIN_DB_VERSION = '1.0';

    private $db, $table_name;

    public function __construct(){
        global $wpdb;
        $this->db = $wpdb;
        $this->table_name = $this->db->prefix . "tgec";
    }

    public static function tgec_db_install(){
        if( ! current_user_can( 'administrator' ) ) {
            return;
        }

        global $wpdb;

        $table_name = $wpdb->prefix . "tgec";
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
  ID MEDIUMINT NOT NULL AUTO_INCREMENT,
  title TEXT NOT NULL,
  details TEXT NOT NULL,
  time datetime NOT NULL,
  PRIMARY KEY (id)
) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

    public function
}


<?php

if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Tgec_admin_list extends   WP_List_Table {

    public function __construct(){

        parent::__construct( array(
            'singular' =>   'event_entry',      //Singular name of the listed records
            'plural'   =>   'events_entries',   //Plural name of the listed records
            'ajax'     =>   false               //does this table support ajax?
        ) );
    }
}
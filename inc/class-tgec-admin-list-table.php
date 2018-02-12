<?php

if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Tgec_admin_list extends WP_List_Table{

    public function no_items() {
        _e( 'No Events Found!' );
    }

    public function column_default( $item, $column_name ) {
        switch( $column_name ) {
            case 'title':
            case 'details':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
        }
    }

    public function get_columns(){
        $columns = array(
            'cb'        => '<input type="checkbox" />',
            'title'     => __( 'Event Title', 'tgec' ),
            'details'   => __( 'Event Details', 'tgec' ),
        );
        return $columns;
    }

    public function get_sortable_columns(){
        $sortable_columns = array(
            'title' => array( 'title', false),
            'details' => array( 'details', false)
        );

        return $sortable_columns;
    }

    public function prepare_items() {
        global $tgec_db;

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $tgec_db->get_events_array();
    }

}
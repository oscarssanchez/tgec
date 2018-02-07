<?php

class Tgec {
    public static function load(){
        global $tgec;
        global $tgec_admin;
        global $tgec_db;

        $tgec = new self();
        $tgec_admin = new Tgec_admin();
        $tgec_db = new Tgec_DB();
    }

    public static function activate() {
        if ( ! current_user_can( 'administrator' ) ) {
            return;
        }

        Tgec_DB::tgec_db_install();
    }
}
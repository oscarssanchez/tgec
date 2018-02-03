<?php

class Tgec {
    public static function load(){
        global $tgec;
        global $tgec_admin;

        $tgec = new self();
        $tgec_admin = new Tgec_admin();
    }
}
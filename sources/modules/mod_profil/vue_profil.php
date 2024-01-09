<?php

include_once 'vue_generique.php';

class VueProfil extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        include_once 'page_profil_visu.html';
    }

    public function page_profil() {

        include_once 'page_profil_visu.html';
    }
}

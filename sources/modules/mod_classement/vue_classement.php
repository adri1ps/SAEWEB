<?php

include_once 'vue_generique.php';

class VueClassement extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        include_once 'page_classement.html';
    }

    public function bienvenue() {

        echo 'Bienvenue';
    }

    function affiche_liste($tab) {


    }
}
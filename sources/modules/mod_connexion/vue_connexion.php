<?php

include_once 'vue_generique.php';

class VueConnexion extends VueGenerique {

    public function __construct() {

    }

    public function formConnexion() {

        include_once 'form_connexion.html';
    }
}
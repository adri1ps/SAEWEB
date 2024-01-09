<?php

include_once 'vue_generique.php';

class VueInscription extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        include_once 'form_inscription.html';
    }

    public function formInscription() {
        
        include_once 'form_inscription.html';
    }
}
?>
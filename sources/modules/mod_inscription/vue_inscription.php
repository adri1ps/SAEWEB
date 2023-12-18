<?php

include_once 'vue_générique.php';

class VueInscription extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

    }

    public function formInscription() {
        
        include_once 'form_inscription.html';
    }
}
?>
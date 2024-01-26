<?php

class CompUpBouton {
    private $bouton_up;

    public function __construct() {
        include_once 'bouton_up.php';
    }

    public function afficheBouton() {
        echo $this -> bouton_up;
    }
}
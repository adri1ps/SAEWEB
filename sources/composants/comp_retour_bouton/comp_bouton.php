<?php

class CompBouton {
    private $bouton;

    public function __construct() {

        include_once 'bouton.php';
    }

    public function afficheBouton() {

        echo $this -> bouton;
    }
}

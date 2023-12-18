<?php


class CompBarreRecherche {
    private $barre;

    public function __construct() {

        include_once 'barreRecherche.html';
    }

    public function afficheBarre() {
        
        echo $this -> barre;
    }
}


?>
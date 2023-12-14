<?php


class CompTitre {
    private $titre;

    public function __construct() {


        include_once 'titre.html';
    }

    public function afficheTitre() {
        
        echo $this -> titre;
    }
}


?>
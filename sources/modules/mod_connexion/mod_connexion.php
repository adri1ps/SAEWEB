<?php

include_once 'cont_connexion.php';
include_once 'Connexion.php';

class ModConnexion {

    private $contConnexion;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contConnexion = new ContConnexion();
        $this -> contConnexion -> exec();
    }

    public function getAffichage() {

        return $this -> contConnexion -> getAffichage();
    }
}


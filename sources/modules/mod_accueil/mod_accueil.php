<?php

include_once 'cont_accueil.php';
include_once 'Connexion.php';

class ModAccueil {

    private $contAccueil;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contAccueil = new ContAccueil();
        $this -> contAccueil -> exec();
    }

    public function getAffichage() {

        return $this -> contAccueil -> getAffichage();
    }
}



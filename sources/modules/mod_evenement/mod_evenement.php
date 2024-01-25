<?php

include_once 'cont_evenement.php';
include_once 'Connexion.php';

class ModEvenement {

    private $contEvenement;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contEvenement = new ContEvenement();
        $this -> contEvenement -> exec();
    }

    public function getAffichage() {

        return $this -> contEvenement -> getAffichage();
    }
}
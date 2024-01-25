<?php

include_once 'cont_politique.php';
include_once 'Connexion.php';

class ModPolitique {

    private $contPolitique;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contPolitique = new ContPolitique();
        $this -> contPolitique -> exec();
    }

    public function getAffichage() {

        return $this -> contPolitique -> getAffichage();
    }
}
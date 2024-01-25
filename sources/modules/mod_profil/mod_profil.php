<?php

include_once 'cont_profil.php';
include_once 'Connexion.php';

class ModProfil {

    private $contProfil;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contProfil = new ContProfil();
        $this -> contProfil -> exec();
    }

    public function getAffichage() {

        return $this -> contProfil -> getAffichage();
    }
}

?>

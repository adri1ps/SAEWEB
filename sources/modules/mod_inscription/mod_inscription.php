<?php

include_once 'cont_inscription.php';
include_once 'Connexion.php';

class ModInscription {

    private $contInscription;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contInscription = new ContInscription();
        $this -> contInscription -> exec();
    }

    public function getAffichage() {

        return $this -> contInscription -> getAffichage();
    }
}

?>
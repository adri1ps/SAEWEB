<?php

include_once 'cont_a_propos.php';
include_once 'Connexion.php';

class ModAPropos {

    private $contAPropos;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contAPropos = new ContAPropos();
        $this -> contAPropos -> exec();
    }

    public function getAffichage() {

        return $this -> contAPropos -> getAffichage();
    }
}

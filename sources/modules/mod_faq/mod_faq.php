<?php

include_once 'cont_faq.php';
include_once 'Connexion.php';

class ModFAQ {

    private $contFAQ;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contFAQ = new ContFAQ();
        $this -> contFAQ -> exec();
    }

    public function getAffichage() {

        return $this -> contFAQ -> getAffichage();
    }
}
<?php

include_once 'cont_contact.php';
include_once 'Connexion.php';

class ModContact {

    private $contContact;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contContact = new ContContact();
        $this -> contContact -> exec();
    }

    public function getAffichage() {

        return $this -> contContact -> getAffichage();
    }
}

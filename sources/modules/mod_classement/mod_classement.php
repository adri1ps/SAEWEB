<?php

include_once 'cont_classement.php';
include_once 'Connexion.php';

class ModClassement {

    private $contClassement;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contClassement = new ContClassement();
        $this -> contClassement -> exec();
    }

    public function getAffichage() {

        return $this -> contClassement -> getAffichage();
    }
}

?>
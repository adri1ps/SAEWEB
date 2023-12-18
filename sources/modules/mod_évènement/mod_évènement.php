<?php

include_once 'cont_evenement.php';
include_once 'Connexion.php';

class ModÉvènement {

    private $contÉvènement;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contÉvènement = new ContEvenement();
        $this -> contÉvènement -> exec();
    }

    public function getAffichage() {

        return $this -> contÉvènement -> getAffichage();
    }
}

?>
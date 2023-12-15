<?php

include_once 'cont_évènement.php';
include_once 'Connexion.php';

class ModÉvènement {

    private $contÉvènement;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contÉvènement = new ContÉvènement();
        $this -> contÉvènement -> exec();
    }

    public function getAffichage() {

        return $this -> contÉvènement -> getAffichage();
    }
}

?>
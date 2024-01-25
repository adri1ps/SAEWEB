<?php

include_once 'cont_statistique.php';
include_once 'Connexion.php';

class ModStatistique{

    private $contStatistique;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contStatistique = new contStatistique();
        $this -> contStatistique -> exec();
    }

    public function getAffichage() {

        return $this -> contStatistique -> getAffichage();
    }
}

?>
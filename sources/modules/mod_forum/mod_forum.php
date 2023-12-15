<?php

include_once 'cont_forum.php';
include_once 'Connexion.php';

class ModForum {

    private $contForum;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contForum = new ContForum();
        $this -> contForum -> exec();
    }

    public function getAffichage() {

        return $this -> contForum -> getAffichage();
    }
}

?>
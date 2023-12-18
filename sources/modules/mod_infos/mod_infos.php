<?php

include_once 'cont_infos.php';
include_once 'Connexion.php';

class ModInfos {

    private $contInfos;

    public function __construct() {

        Connexion :: initConnexion();

        $this -> contInfos = new ContInfos();
        $this -> contInfos -> exec();
    }

    public function getAffichage() {

        return $this -> contInfos -> getAffichage();
    }
}

?>
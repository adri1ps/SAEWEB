<?php

include_once 'modele_accueil.php';
include_once 'vue_accueil.php';
include_once 'Connexion.php';
/**/
class ContAccueil {

    private $modeleAccueil;
    private $vueAccueil;
    private $actionAccueil;

    public function __construct() {

        $this -> modeleAccueil = new ModeleAccueil();
        $this -> vueAccueil = new VueAccueil();
        $this -> actionAccueil = isset($_GET['action']) ? $_GET['action'] : '';

    }

    public function exec() {

        switch($this -> actionAccueil) {

            default:

                $this -> vueAccueil -> menu($this -> modeleAccueil -> nombreDeJoueurs(), $this -> modeleAccueil -> lesTextesDePresentationDeLaPage());
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueAccueil -> getAffichage();
    }
}


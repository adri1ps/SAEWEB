<?php

include_once 'modele_profil.php';
include_once 'vue_profil.php';
include_once 'Connexion.php';

class ContProfil {

    private $modeleProfil;
    private $vueProfil;
    private $actionProfil;

    public function __construct() {

        $this -> modeleProfil = new ModeleProfil();
        $this -> vueProfil = new VueProfil();
        $this -> actionProfil = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {

        $this -> vueProfil -> page_profil($_SESSION['user']);
        /*switch($this -> actionProfil) {
            case 'page_profil' :

                break;
        }*/
    }

    public function getAffichage() {

        return $this -> vueProfil -> getAffichage();
    }
}

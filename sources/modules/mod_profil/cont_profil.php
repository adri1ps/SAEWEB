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
        $user = $_SESSION['user'];
        $userInfo = $this -> modeleProfil -> infosJoueurs($user);
        $this -> vueProfil -> page_profil($userInfo);
    }

    public function getAffichage() {

        return $this -> vueProfil -> getAffichage();
    }
}

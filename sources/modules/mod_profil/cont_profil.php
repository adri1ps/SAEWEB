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
        switch($this -> actionProfil) {
            case 'modifierProfil':
                $this -> modifierProfil();
                break;
            case 'modification':
                $this -> applicationModif();
                $this -> changerNomSession();
                header('Location:index.php?module=mod_profil');
                break;
            case 'suppression':
                $this ->supprimerCompte();
                header('Location:index.php?module=mod_connexion');
            default:
                $this -> afficherProfil();
                break;
        }

    }
    public function supprimerCompte(){
        $this -> modeleProfil -> supprimer($this ->getInfoUser());
    }
    public function afficherProfil(){
        $userInfo = $this->getInfoUser();
        $this -> vueProfil -> page_profil($userInfo);
    }

    public function modifierProfil(){
        $userInfo = $this->getInfoUser();
        $this -> vueProfil -> modif_profil($userInfo);
    }

    public function applicationModif(){
        $this -> modeleProfil -> modifier($this ->getInfoUser());
    }

    public function getInfoUser(){
        return $this -> modeleProfil -> infosJoueurs();
    }

    public function getAffichage() {

        return $this -> vueProfil -> getAffichage();
    }

    public function changerNomSession(){
        $_SESSION['user'] = $_POST['nomModif'];
    }
}

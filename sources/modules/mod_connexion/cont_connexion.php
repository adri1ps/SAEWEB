<?php

include_once 'modele_connexion.php';
include_once 'vue_connexion.php';
include_once 'Connexion.php';

class ContConnexion {

    private $modeleConnexion;
    private $vueConnexion;
    private $actionConnexion;

    public function __construct() {
        
        $this -> modeleConnexion = new ModeleConnexion();
        $this -> vueConnexion = new VueConnexion();
        $this -> actionConnexion = isset($_GET['action']) ? $_GET['action'] : '';

    }

    public function exec() {
        
        switch($this -> actionConnexion) {
            case 'deconnexion':
                $this -> deconnexion();
                break;
            case 'connexion':
                $this -> connexion();
                break;
            default :
                $this -> vueConnexion -> formConnexion();
                break;
        }
    }

    public function deconnexion() {

       session_unset();
        session_destroy();
    }

    public function getAffichage() {

        return $this -> vueConnexion -> getAffichage();
    }

    public function connexion() {

        $bool = $this -> modeleConnexion -> autorisationConnexion();
        if($bool) {

            New ModProfil();
        }
        else {

            New ModConnexion();
        }

    }
}

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
        $this -> actionConnexion = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        switch($this -> actionConnexion) {
            case 'bienvenue' :
                
                $this -> vueConnexion -> bienvenue();
                break;
            default :

                $this -> vueConnexion -> formConnexion();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueConnexion -> getAffichage();
    }

    public function addUser() {

        $bool = $this -> modeleConnexion -> createUser();
        if($bool) {
            echo "Insertion valide.";
        }else {
            echo "Insertion invalide.";
        }
    }


    public function connexion() {
        $bool = $this -> modeleConnexion -> verifyConnection();
        if($bool) {
            echo "Connexion réussit.\n";
            $this -> vueConnexion -> messageConnex();
        }else {
            echo "Connexion échoué.";
        }

    }

    public function deconnexion(){
        session_unset();
        session_destroy();
        
        

    }

}
?>
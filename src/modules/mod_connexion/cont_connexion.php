<?php

include_once 'modules/mod_connexion/modele_connexion.php';


class ContConnexion{

    private $modele , $vue;

    public function __construct() {
        $this->modele = new ModeleConnexion();
        $this->vue = new VueConnexion();

    }


    public function addUser() {

        $bool = $this->modele->createUser();
        if($bool) {
            echo "Insertion valide.";
        }else {
            echo "Insertion invalide.";
        }
    }


    public function connexion(){
        $bool = $this->modele->verifyConnection();
        if($bool) {
            echo "Connexion réussit.\n";
            $this->vue->messageConnex();
        }else {
            echo "Connexion échoué.";
        }

    }

    public function deconnexion(){
        session_unset();
        session_destroy();
        
        

    }

}    

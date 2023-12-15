<?php

include_once 'modele_classement.php';
include_once 'vue_classement.php';
include_once 'Connexion.php';

class ContClassement {

    private $modeleClassement;
    private $vueClassement;
    private $actionClassement;

    public function __construct() {
        
        $this -> modeleClassement = new ModeleClassement();
        $this -> vueClassement = new VueClassement();
        $this -> actionClassement = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this -> vueClassement -> menu();
        switch($this -> actionClassement) {
            case 'bienvenue' :
                
                $this -> vueClassement -> bienvenue();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueClassement -> getAffichage();
    }
}
?>
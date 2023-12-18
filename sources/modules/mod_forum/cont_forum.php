<?php

include_once 'modele_forum.php';
include_once 'vue_forum.php';
include_once 'Connexion.php';

class ContForum {

    private $modeleForum;
    private $vueForum;
    private $actionForum;

    public function __construct() {
        
        $this -> modeleForum = new ModeleForum();
        $this -> vueForum = new VueForum();
        $this -> actionForum = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this -> vueForum -> menu();
        switch($this -> actionForum) {
            case 'bienvenue' :
                
                $this -> vueForum -> bienvenue();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueForum -> getAffichage();
    }
}
?>
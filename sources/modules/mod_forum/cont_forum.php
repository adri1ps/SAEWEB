<?php

include_once 'modele_forum.php';
include_once 'vue_forum.php';
include_once 'Connexion.php';

class ContForum {

    private $modeleForum;
    private $vueForum;
    private $actionForum;

    public function __construct() {
        
        $this->modeleForum = new ModeleForum();
        $this->vueForum = new VueForum();
        $this->actionForum = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this->vueForum->menu();
        switch ($this->actionForum) {
            case 'bienvenue' :
                
                $this->vueForum->bienvenue();
                break;
            default:
                $this->formMessage();
        }
    }

    public function getAffichage() {

        $tab = $this->modeleForum->getListeMessage();
        $this->vueForum->affiche_liste_msg($tab);
    }

    public function formMessage() {
       
        echo '<div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">';
        $this->vueForum->form_ajoutMsg();
        echo '</div>';
    }


    public function ajoutMsg() {
    
        $bool = $this->modeleForum->insertMessage();
        if ($bool) {
            echo "Message Posté.";
        } else {
            echo "Insertion invalide.";
        }
    }

}
?>

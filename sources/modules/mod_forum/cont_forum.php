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
            case "poster":
                $this->ajoutMsg();
            break;
        
        }
    }

    public function getAffichage() {

        $tab = $this->modeleForum->getListeMessage();
        $this->vueForum->affiche_liste_msg($tab);
        $this->formMessage();
    }

    


    public function formMessage() {
        $this->vueForum->form_ajoutMsg();
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

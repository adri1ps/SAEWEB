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
        switch ($this->actionForum) {
            case "poster":
                $this->ajoutMsg();
                header('Location:index.php?module=mod_forum');
            break;
        
        }
    }

    public function getAffichage() {
       
        $tab = $this->modeleForum->getListeMessageAvecInfoJoueur();

        $this->vueForum->affiche_liste_msg($tab);
       
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

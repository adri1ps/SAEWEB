<?php

include_once 'modele_faq.php';
include_once 'vue_faq.php';
include_once 'Connexion.php';

class ContFAQ {

    private $modeleFAQ;
    private $vueFAQ;
    private $actionFAQ;

    public function __construct() {

        $this -> modeleFAQ = new ModeleFAQ();
        $this -> vueFAQ = new VueFAQ();
        $this -> actionFAQ = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page';

    }

    public function exec() {

        switch($this -> actionFAQ) {
            case 'poser_question': 

                $this -> modeleFAQ -> insertQuestion();
                header('Location:index.php?module=mod_faq');
                exit();
                break;
            default:

                $this -> vueFAQ -> affiche_faq($this -> modeleFAQ -> retourneLesDonneesDeLaFAQ());
                $this -> vueFAQ -> affichageFormPoserQuestion();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueFAQ -> getAffichage();
    }
}

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
            case 'nbKills':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbKills());
                break;
            case 'tempsDeJeu':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParTempsJeu());
                break;
            case 'ratio':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParRatio());
                break;
            case 'nbMorts':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbMorts());
                break;
            case 'nbPartiesJouees':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbPartiesJouees());
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueClassement -> getAffichage();
    }
}
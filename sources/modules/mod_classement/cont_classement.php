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

        switch($this -> actionClassement) {
            case 'eliminations':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbKills());
                break;
            case 'temps':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParTempsJeu());
                break;
            case 'ratio':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParRatio());
                break;
            case 'morts':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbMorts());
                break;
            case 'parties':

                $this -> vueClassement -> affiche_liste($this -> modeleClassement -> classementJoueursParNbPartiesJouees());
                break;
            default:

                $this -> vueClassement -> menu($this -> modeleClassement -> filtres(), $this -> modeleClassement -> affichageClassementDuJoueurConnecte($_SESSION['user']));
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueClassement -> getAffichage();
    }
}
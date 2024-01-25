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

        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
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

                if (isset($_SESSION['user'])) {

                    $userInfo = $this -> modeleClassement-> retourneClassementDuJoueurConnecte($_SESSION['user']);
                } else {

                    $userInfo = null;
                }
                $this -> vueClassement -> menu($this -> modeleClassement -> filtres(), $userInfo);
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
<?php

include_once 'modele_statistique.php';
include_once 'vue_statistique.php';
include_once 'Connexion.php';

class ContStatistique {

    private $modeleStatistique;
    private $vueStatistique;
    private $actionStatistique;

    public function __construct() {

        $this -> modeleStatistique = new ModeleStatistique();
        $this -> vueStatistique = new VueStatistique();
        $this -> actionStatistique = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Statistique';

    }

    public function exec() {
        $user = $_SESSION['user'];
        $userStat = $this -> modeleStatistique -> statsJoueurs($user);
        $this -> vueStatistique -> page_statistique($userStat);

        /*
        $this -> vueStatistique -> menu();
        switch($this -> actionStatistique) {
            case 'page_statistique' :

                $this -> vueStatistique -> page_statistique();
                break;
        }
        */
    }

    public function getAffichage() {

        return $this -> vueStatistique -> getAffichage();
    }
}
<?php

include_once 'modele_evenement.php';
include_once 'vue_evenement.php';
include_once 'Connexion.php';

class ContEvenement {

    private $modeleEvenement;
    private $vueEvenement;
    private $actionEvenement;

    public function __construct() {
        
        $this -> modeleEvenement = new ModeleEvenement();
        $this -> vueEvenement = new VueEvenement();
        $this -> actionEvenement = isset($_GET['action']) ? $_GET['action'] : '';

    }

    public function exec() {
        
        $this -> vueEvenement -> menu();
        switch($this -> actionEvenement) {
            case 'nouvelle_saison' :

                $this -> vueEvenement -> afficheListe($this -> modeleEvenement -> event("Nouvelle saison"));
                break;
            case 'week-end_special' :

                $this -> vueEvenement -> afficheListe($this -> modeleEvenement -> event("Week-end spécial"));
                break;
            case 'nouvelle_map' :

                $this -> vueEvenement -> afficheListe($this -> modeleEvenement -> event("Nouvelle map"));
                break;
            case 'tournoi' :

                $this -> vueEvenement -> afficheListe($this -> modeleEvenement -> event("Tournoi"));
                break;
            case 'tente_ta_chance' :

                $this -> vueEvenement -> afficheListe($this -> modeleEvenement -> event("Tente ta chance"));
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueEvenement -> getAffichage();
    }
}
?>
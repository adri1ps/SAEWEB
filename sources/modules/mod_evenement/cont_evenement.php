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

        switch($this -> actionEvenement) {
            case 'Nouvelle saison' :

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerLesEventsParCategorie("Nouvelle saison"));
                break;
            case 'Week-end special' :

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerLesEventsParCategorie("Week-end special"));
                break;
            case 'Nouvelle map' :

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerLesEventsParCategorie("Nouvelle map"));
                break;
            case 'Tournoi' :

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerLesEventsParCategorie("Tournoi"));
                break;
            case 'Tente ta chance' :

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerLesEventsParCategorie("Tente ta chance"));
                break;
            case 'tous_les_events':

                $this -> vueEvenement -> affichageDesEventsRetournes($this -> modeleEvenement -> retournerTousLesEvents());
                break;
            default :

                $this -> vueEvenement -> menu($this -> modeleEvenement -> retourneLesTypesDeEvents());
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueEvenement -> getAffichage();
    }
}
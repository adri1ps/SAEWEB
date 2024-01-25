<?php

include_once 'modele_politique.php';
include_once 'vue_politique.php';
include_once 'Connexion.php';

class ContPolitique {

    private $modelePolitique;
    private $vuePolitique;
    private $actionPolitique;

    public function __construct() {

        $this -> modelePolitique = new ModelePolitique();
        $this -> vuePolitique = new VuePolitique();
        $this -> actionPolitique = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page';

    }

    public function exec() {

        switch($this -> actionPolitique) {
            default:

                $this -> vuePolitique -> menu($this -> modelePolitique -> retourneLesTextesEnFonctionDuTypeChoisi('politiqueTitre'), $this -> modelePolitique -> retourneLesTextesEnFonctionDuTypeChoisi('politiqueTexte'));
                break;

        }
    }

    public function getAffichage() {

        return $this -> vuePolitique -> getAffichage();
    }
}

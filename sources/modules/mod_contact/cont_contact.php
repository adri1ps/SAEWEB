<?php

include_once 'modele_contact.php';
include_once 'vue_contact.php';
include_once 'Connexion.php';

class ContContact {

    private $modeleContact;
    private $vueContact;
    private $actionContact;

    public function __construct() {

        $this -> modeleContact = new ModeleContact();
        $this -> vueContact = new VueContact();
        $this -> actionContact = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page';

    }

    public function exec() {

        switch($this -> actionContact) {
            default:

                $this -> vueContact -> affiche_menu($this -> modeleContact -> retourneLesTextesEnFonctionDuTypeChoisi('contactTitre'), $this -> modeleContact -> retourneLesTextesEnFonctionDuTypeChoisi('contactTexte'));
                break;

        }
    }

    public function getAffichage() {

        return $this -> vueContact -> getAffichage();
    }
}

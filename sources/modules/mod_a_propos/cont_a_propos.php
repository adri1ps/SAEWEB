<?php

include_once 'modele_a_propos.php';
include_once 'vue_a_propos.php';
include_once 'Connexion.php';

class ContAPropos {

    private $modeleAPropos;
    private $vueAPropos;
    private $actionAPropos;

    public function __construct() {

        $this -> modeleAPropos = new ModeleAPropos();
        $this -> vueAPropos = new VueAPropos();
        $this -> actionAPropos = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page';

    }

    public function exec() {

        switch($this -> actionAPropos) {
            default:

                break;

        }
    }

    public function getAffichage() {

        return $this -> vueAPropos -> getAffichage();
    }
}

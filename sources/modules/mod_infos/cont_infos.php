<?php

include_once 'modele_infos.php';
include_once 'vue_infos.php';
include_once 'Connexion.php';

class ContInfos {

    private $modeleInfos;
    private $vueInfos;
    private $actionInfos;

    public function __construct() {
        
        $this -> modeleInfos = new ModeleInfos();
        $this -> vueInfos = new VueInfos();
        $this -> actionInfos = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this -> vueInfos -> menu();
        switch($this -> actionInfos) {
            case 'bienvenue' :
                
                $this -> vueInfos -> bienvenue();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueInfos -> getAffichage();
    }
}
?>
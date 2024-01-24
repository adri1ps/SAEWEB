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

        switch($this -> actionInfos) {
            case 'tours':

                $this -> vueInfos -> afficheInfosDesTours($this -> modeleInfos -> retourneInfosDesTours());
                break;
            case 'projectiles':

                $this -> vueInfos -> afficheInfosDesProjectiles($this -> modeleInfos -> retourneInfosDesProjectiles());
                break;
            case 'soldats':

                $this -> vueInfos -> afficheInfosDesSoldats($this -> modeleInfos -> retourneInfosDesSoldats());
                break;
            default:

                $this -> vueInfos -> menu($this -> modeleInfos -> retourneLesActeurs());
                break;

        }
    }

    public function getAffichage() {

        return $this -> vueInfos -> getAffichage();
    }
}
?>
<?php

include_once 'modele_évènement.php';
include_once 'vue_évènement.php';
include_once 'Connexion.php';

class ContÉvènement {

    private $modeleÉvènement;
    private $vueÉvènement;
    private $actionÉvènement;

    public function __construct() {
        
        $this -> modeleÉvènement = new ModeleÉvènement();
        $this -> vueÉvènement = new VueÉvènement();
        $this -> actionÉvènement = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this -> vueÉvènement -> menu();
        switch($this -> actionÉvènement) {
            case 'bienvenue' :
                
                $this -> vueÉvènement -> bienvenue();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueÉvènement -> getAffichage();
    }
}
?>
<?php

include_once 'modele_inscription.php';
include_once 'vue_inscription.php';
include_once 'Connexion.php';

class ContInscription {

    private $modeleInscription;
    private $vueInscription;
    private $actionInscription;

    public function __construct() {
        
        $this -> modeleInscription = new ModeleInscription();
        $this -> vueInscription = new VueInscription();
        $this -> actionInscription = isset($_GET['action']) ? $_GET['action'] : 'Bienvenue sur la page Joueur';

    }

    public function exec() {
        
        $this -> vueInscription -> menu();
        switch($this -> actionInscription) {
            case 'inscription' :

                $this -> modeleInscription -> creationUtilisateur();
                $this -> connexion();
                break;
        }
    }

    public function getAffichage() {

        return $this -> vueInscription -> getAffichage();
    }

    public function deconnexion() {

        unset($_SESSION['utilisateur']);
    }

    public function addUser() {

        $bool = $this -> modeleConnexion -> createUser();
        if($bool) {
            echo "Insertion valide.";
        }else {
            echo "Insertion invalide.";
        }
    }

    public function connexion() {
        $_SESSION['user'] = $_POST['nomInsc'];
    }
}
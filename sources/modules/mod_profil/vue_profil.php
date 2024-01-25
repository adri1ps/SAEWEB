<?php

include_once 'vue_generique.php';

class VueProfil extends VueGenerique {

    public function __construct() {

    }

    public function page_profil($user) {
        $nom = $user['nom'];
        $email = $user['email'];
        $biographie = $user['biographie'];
        $pp = $user['photoProfil'];

        include_once 'page_profil.php';
    }

    public function modif_profil($user){
        $nom = $user['nom'];
        $mdp = $user['mot_de_passe'];
        $email = $user['email'];
        $biographie = $user['biographie'];
        $pp = $user['photoProfil'];
        include_once 'modif_profil.php';
    }
}
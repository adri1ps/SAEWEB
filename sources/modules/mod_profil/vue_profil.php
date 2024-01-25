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
        $abonnement = $user['abonnement'];
        $ratio = $user['ratio'];
        $nbKills = $user['eliminations'];
        $nbMorts = $user['morts'];
        $nbPartiesJouees = $user['parties'];
        $temps = $user['temps'];
        include_once 'page_profil.php';
    }

    public function modif_profil($user){
        $nom = $user['nom'];
        $email = $user['email'];
        $biographie = $user['biographie'];
        $pp = $user['photoProfil'];
        include_once 'modif_profil.php';
    }
}
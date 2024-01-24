<?php

include_once 'vue_generique.php';

class VueProfil extends VueGenerique {

    public function __construct() {

    }

    public function page_profil($user) {
        $nom = $user['nom'];
        $email = $user['email'];
        $biographie = $user['biographie'];

        include_once 'form_profil.php';
    }
}
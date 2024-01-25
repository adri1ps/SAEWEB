<?php

include_once 'vue_generique.php';

class VueStatistique extends VueGenerique {

    public function __construct() {

    }


    public function page_statistique($user) {
        $abonnement = $user['abonnement'];
        $ratio = $user['ratio'];
        $nbKills = $user['eliminations'];
        $nbMorts = $user['morts'];
        $nbPartiesJouees = $user['parties'];

        include_once 'form_statistique.php';
    }
}
?>
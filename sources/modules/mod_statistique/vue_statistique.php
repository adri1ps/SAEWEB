<?php

include_once 'vue_generique.php';

class VueStatistique extends VueGenerique {

    public function __construct() {

    }


    public function page_statistique() {
        $abonnement = $user['abonnement'];
        $ration = $user['ratio'];
        $nbKills = $user['nbKills'];
        $nbMorts = $user['nbMorts'];
        $nbPartiesJouees = $user['nbPartiesJouees'];

        include_once 'form_statistique.php';
    }
}
?>
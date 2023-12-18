<?php

include_once 'vue_générique.php';

class VueEvenement extends VueGenerique {

    public function __construct() {


    }

    public function menu() {

        include_once 'page_event.html';
    }
    function afficheListe($arr) {

        if (is_array($arr) && !empty($arr)) {

            include_once 'liste_evenement.php';
        }
    }

}
?>
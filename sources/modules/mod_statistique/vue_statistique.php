<?php

include_once 'vue_generique.php';

class VueStatistique extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

    }

    public function page_statistique() {

        include_once 'page_statistique_visu.html';
    }
}
?>
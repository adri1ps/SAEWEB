<?php

include_once '/home/etudiants/info/aabdi/local_html/SAEWEB/sources/vue_générique.php';

class VueInscription extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_inscription&&action=bienvenue">Action Bienvenue 4</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }
}
?>
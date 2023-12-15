<?php

include_once '/home/etudiants/info/aabdi/local_html/SAEWEB/sources/vue_générique.php';

class VueÉvènement extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_évènement&&action=bienvenue">Action Bienvenue 1</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }
}
?>
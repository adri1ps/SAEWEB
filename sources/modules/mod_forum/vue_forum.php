<?php

include_once '/home/etudiants/info/aabdi/local_html/SAEWEB/sources/vue_générique.php';

class VueForum extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_forum&&action=bienvenue">Action Bienvenue 2</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }
}
?>
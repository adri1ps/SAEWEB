<?php

include_once '/home/etudiants/info/aabdi/local_html/SAEWEB/sources/vue_générique.php';

class VueClassement extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_classement&&action=bienvenue">Action Bienvenue</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }
}
?>
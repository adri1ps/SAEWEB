<?php

include_once 'vue_générique.php';

class VueInfos extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_infos&&action=bienvenue">Action Bienvenue 3</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }
}
?>
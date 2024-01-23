<?php

include_once 'vue_generique.php';

class VueProfil extends VueGenerique {

    public function __construct() {

    }

    public function page_profil($user) {

        if (!empty($user)) {

            foreach ($user as $tab) {

                echo $tab['nom'];
                echo $tab['mot_de_passe'];
            }
        } else {
            
            echo "Aucun utilisateur trouvé.";
        }
    }
}

<?php

include_once 'vue_generique.php';

class VueAccueil extends VueGenerique {

    public function __construct() {

    }

    public function menu($nombre, $textes) {

        echo '<div style="background-color: #031633; height: 700px; width: 75%;">';

            echo '<div class="main-content mt-3 col">';

                echo '<h1 class="d-flex justify-content-center bg-white col-xl-12" style="font-family: Avenir; color: #031633">Bienvenue sur le site de notre jeu vidéo!</h1>';

                $this -> affichageDesTextesDePresentationDeLaPage($textes);

                echo '<div class="col-xl-12 p-5 d-flex justify-content-center bg-white">';
                    include_once 'boutonTelechargement.html';
                echo '</div>';

                echo '<div class="col-xl-12 d-flex justify-content-center mt-4">';

                    echo '<p class="text-white" style="font-family: Avenir;">Nous avons atteint les ';
                        $this -> affichageNombreJoueurs($nombre);
                    echo ' MILLIONS de joueurs grâce à vous. Nous vous en remercions énormément !</p>';

                echo '</div>';

            echo '</div>';

        echo '</div>';
    }

    public function affichageNombreJoueurs($nombre) {

        echo $nombre;
    }

    public function affichageDesTextesDePresentationDeLaPage($textes) {

        foreach ($textes as $texte) {

            echo '<p class="text-white m-5" style="font-family: Avenir;">';

            echo $texte['texte'];

            echo '</p>';}
    }
    
    
    
}

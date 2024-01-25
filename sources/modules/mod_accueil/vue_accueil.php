<?php

include_once 'vue_generique.php';

class VueAccueil extends VueGenerique {

    public function __construct() {

    }

    public function menu($nombre, $textes) {

        echo '<div class="containerPageAccueil">';

            echo '<div class="main-content mt-3 col">';

                echo '<h1 class="d-flex justify-content-center bg-white col-xl-12 titrePageAccueil">Bienvenue sur le site de notre jeu vidéo!</h1>';

                echo '<div class="d-flex flex-column justify-content-center">';
                    
                    $this -> affichageDesTextesDePresentationDeLaPage($textes);
                echo '</div>';
                echo '<div class="d-flex align-items-center justify-content-center mt-4">';

                    echo '<p class="text-white">Nous avons atteint les ';
                        
                        $this -> affichageNombreJoueurs($nombre);
                    echo ' MILLIONS de joueurs grâce à vous. Nous vous en remercions énormément !</p>';

                echo '</div>';
                

                echo '<div class="col-xl-12 p-5 d-flex justify-content-center bg-white">';
                    include_once 'boutonTelechargement.html';
                echo '</div>';

            echo '</div>';

        echo '</div>';
    }

    public function affichageNombreJoueurs($nombre) {

        echo $nombre;
    }

    public function affichageDesTextesDePresentationDeLaPage($textes) {

        foreach ($textes as $texte) {

            echo '<p class="text-white m-5">';

            echo $texte['texte'];

            echo '</p>';}
    }
    
    
    
}

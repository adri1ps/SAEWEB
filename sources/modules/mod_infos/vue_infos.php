<?php

include_once 'vue_generique.php';

class VueInfos extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        include_once 'page_infos.html';
    }

    function afficheInfosDesTours($tours) {

        echo '<div class="container containerInfosTours">';

        foreach ($tours as $tour) {
            echo '<div class="card mb-3 vignetteInfosTours">';
                echo '<img class="card-img-top d-flex justify-content-center mx-auto imagesInfosTours" src="../sources/ressources/'.htmlspecialchars($tour['sprite']).'" alt="Image '.htmlspecialchars($tour['type']).'">';

                echo '<div class="card-body border-top">';
                    echo '<h5 class="card-title d-flex justify-content-center">'.htmlspecialchars($tour['type']).'</h5>';

                    if ($tour['type'] == 'Base Principale') {

                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">PV: '.htmlspecialchars($tour['pv']).'</p>';
                    }
                    else {

                        echo '<div class="row d-none d-xl-flex">';

                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Coût '.htmlspecialchars($tour['cout']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">PV '.htmlspecialchars($tour['pv']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Portée '.htmlspecialchars($tour['portee']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Cadence '.htmlspecialchars($tour['cadenceDeTir']).'</p>';
                        echo '<p class="card-text col-xl-4 d-flex justify-content-center">Projectile <img class="card-img-top" style="width: 50px;" src="../sources/ressources/'.htmlspecialchars($tour['projectileTir']).'" alt="logu du projectile"></p>';


                        echo '</div>';
                    }
                    echo '<p class="card-text">'.htmlspecialchars($tour['texte']).'</p>';
                echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }


}
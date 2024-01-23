<?php

include_once 'vue_generique.php';

class VueInfos extends VueGenerique {

    const URL = "../sources/ressources/";

    public function menu($acteurs) {

        echo '<div class="container containerDesActeurs">';
        echo '<div class="row">';

        foreach ($acteurs as $acteur) {

            echo '<a href="index.php?module=mod_infos&action='.htmlspecialchars($acteur['type']).'">';
            echo '<div class="col-md-4 col-sm-6">';
                echo '<div class="card mb-4 p-5 vignetteDesActeurs">';

                    echo '<img class="card-img-top mb-5 d-flex justify-content-center mx-auto imageDesActeurs" src="'.htmlspecialchars(self::URL . $acteur['sprite']).'" alt="Image '.htmlspecialchars($acteur['type']).'">';
                    echo '<h5 class="card-title d-flex justify-content-center">'.htmlspecialchars($acteur['type']).'</h5>';

                echo '</div>';
            echo '</div>';
            echo'</a>';
        }
        echo '</div>';
        echo '</div>';
    }

    public function afficheInfosDesTours($tours) {

        echo '<div class="container containerInfosTours">';
        echo "<div class='row'>";
        foreach ($tours as $tour) {

            echo "<div class='col-md-4 col-sm-6'>";
            echo '<div class="card mb-3 vignetteInfosTours">';
                echo '<img class="card-img-top d-flex justify-content-center mx-auto imagesInfosTours" src="'.htmlspecialchars(self::URL . $tour['sprite']).'" alt="Image '.htmlspecialchars($tour['type']).'">';

                echo '<div class="card-body border-top">';
                    echo '<h5 class="card-title d-flex justify-content-center">'.htmlspecialchars($tour['type']).'</h5>';

                    if ($tour['type'] == 'Base Principale') {

                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">PV: '.htmlspecialchars($tour['pv']).'</p>';
                    }
                    else {

                        echo '<div class="row">';

                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Coût '.htmlspecialchars($tour['cout']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">PV '.htmlspecialchars($tour['pv']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Portée '.htmlspecialchars($tour['portee']).'</p>';
                        echo '<p class="card-text col-xl-2 d-flex justify-content-center">Cadence '.htmlspecialchars($tour['cadenceDeTir']).'</p>';
                        echo '<p class="card-text col-xl-4 d-flex justify-content-center">Projectile <img class="card-img-top" style="width: 50px;" src="'.htmlspecialchars(self::URL . $tour['projectileTir']).'" alt="logo du projectile"></p>';


                        echo '</div>';
                    }
                    echo '<p class="card-text">'.htmlspecialchars($tour['texte']).'</p>';
                echo '</div>';
            echo "</div>";
            echo '</div>';
        }
        echo "</div>";
        echo '</div>';
    }


}
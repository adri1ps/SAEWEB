<?php

include_once 'vue_generique.php';

class VueInfos extends VueGenerique {

    const URL = "../sources/ressources/";

    public function menu($acteurs) {

        echo '<div class="container containerDesActeurs">';
        echo '<div class="row">';

        foreach ($acteurs as $acteur) {
            echo '<div class="col-12 col-xl-4 col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">';

            echo '<a class="text-decoration-none text-uppercase" href="index.php?module=mod_infos&action='.htmlspecialchars($acteur['type']).'">';

            echo '<div class="card mb-4 p-5 vignetteDesActeurs">';

            echo '<img class="card-img-top mb-5 justify-content-center mx-auto imageDesActeurs" src="'.htmlspecialchars(self::URL . $acteur['sprite']).'" alt="Image '.htmlspecialchars($acteur['type']).'">';
            echo '<h5 class="card-title d-flex justify-content-center align-items-center">'.htmlspecialchars($acteur['type']).'</h5>';

            echo '</div>';
            echo'</a>';
            echo '</div>';
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

    public function afficheInfosDesSoldats($soldats) {

        echo '<div class="container containerInfosSoldats">';
        echo "<div class='row'>";
        foreach ($soldats as $soldat) {

            echo "<div class='col-md-4 col-sm-6'>";
            echo '<div class="card mb-3 vignetteInfosSoldats">';
            echo '<img class="card-img-top d-flex justify-content-center mx-auto imagesInfosSoldats" src="'.htmlspecialchars(self::URL . $soldat['sprite']).'" alt="Image '.htmlspecialchars($soldat['type']).'">';

            echo '<div class="card-body border-top">';
            echo '<h5 class="card-title d-flex justify-content-center text-uppercase">'.htmlspecialchars($soldat['type']).'</h5>';

                echo '<div class="row">';

                echo '<p class="card-text col-xl-3 d-flex justify-content-center">Vitesse '.htmlspecialchars($soldat['vitesse']).'</p>';
                echo '<p class="card-text col-xl-3 d-flex justify-content-center">PV '.htmlspecialchars($soldat['pv']).'</p>';
                echo '<p class="card-text col-xl-3 d-flex justify-content-center">Portée '.htmlspecialchars($soldat['portée']).'</p>';
                echo '<p class="card-text col-xl-3 d-flex justify-content-center">Dégâts '.htmlspecialchars($soldat['dégâts']).'</p>';

                echo '</div>';

            echo '<p class="card-text">'.htmlspecialchars($soldat['texte']).'</p>';
            echo '</div>';
            echo "</div>";
            echo '</div>';
        }
        echo "</div>";
        echo '</div>';
    }

    public function afficheInfosDesProjectiles($projectiles) {

        echo '<div class="container containerInfosProjectiles">';
        echo "<div class='row'>";
        foreach ($projectiles as $projectile) {

            echo "<div class='col-sm-12 col-md-12 col-lg-6'>";
            echo '<div class="card mb-3 vignetteInfosProjectiles">';
            echo '<img class="card-img-top d-flex justify-content-center mx-auto imagesInfosProjectiles" src="'.htmlspecialchars(self::URL . $projectile['sprite']).'" alt="Image '.htmlspecialchars($projectile['type']).'">';

            echo '<div class="card-body border-top">';
            echo '<h5 class="card-title d-flex justify-content-center text-uppercase">'.htmlspecialchars($projectile['type']).'</h5>';

            echo '<div class="row">';

            echo '<p class="card-text col-xl-4 d-flex justify-content-center">Vitesse '.htmlspecialchars($projectile['vitesse']).'</p>';
            echo '<p class="card-text col-xl-4 d-flex justify-content-center">Précision '.htmlspecialchars($projectile['précision']).'</p>';
            echo '<p class="card-text col-xl-4 d-flex justify-content-center">Dégâts '.htmlspecialchars($projectile['dégâts']).'</p>';

            echo '</div>';

            echo '<p class="card-text">'.htmlspecialchars($projectile['texte']).'</p>';
            echo '</div>';
            echo "</div>";
            echo '</div>';
        }
        echo "</div>";
        echo '</div>';
    }

}
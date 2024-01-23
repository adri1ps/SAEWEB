<?php

include_once 'vue_generique.php';

class VueEvenement extends VueGenerique {

    public function menu() {

        include_once 'page_event.html';
    }

    function affichageDesEventsRetournes($type) {
        $cheminImages = '../sources/ressources/';

        echo "<div class='container containerEvent'>";

        echo "<div class='row'>";

        foreach ($type as $event) {

            echo "<div class='col-md-4 col-sm-6'>";
            echo "<div class='card mb-3 vignetteEvent'>";

            if (isset($event['logo']) && $event['logo'] != '') {
                echo "<img class='card-img-top' src='" . htmlspecialchars($cheminImages . $event['logo']) . "' alt='Logo de l'événement'>";
            }

            echo "<div class='card-body'>";

            foreach ($event as $subKey => $subValue) {
                if ($subKey != 'logo' && $subKey != 'idEvent') {
                    echo "<h3 class='card-title'>" . htmlspecialchars($subKey) . "</h3>";
                    echo "<p class='card-text'>" . htmlspecialchars($subValue) . "</p>";
                }
            }

            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>";
        echo "</div>";
    }

}
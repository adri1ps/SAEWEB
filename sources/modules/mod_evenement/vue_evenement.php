<?php

include_once 'vue_generique.php';

class VueEvenement extends VueGenerique {

    public function menu($typesEvent) {

        echo '<div class="d-flex flex-column justify-content-center align-items-center">';

            echo '<a href="index.php?module=mod_evenement&&action=tous_les_events">';
                echo '<button type="button" class="custom-btn btn btn-primary custom-btn-eventPage">Tous les events</button>';
            echo '</a>';
        echo '</div>';

        echo '<div class="row mt-xl-2 borderPageEvent">';
            echo '<div class="col-xl-12 d-flex justify-content-center mt-xl-2 ligneDesTypesDeEvents">';

        foreach ($typesEvent as $type) {

                echo '<a href="index.php?module=mod_evenement&&action='.htmlspecialchars($type['type']).'">';
                    echo '<button type="button" class="custom-btn btn btn-primary me-xl-4 custom-btn-eventPage">';
                        echo $type['type'];
                    echo '</button>';
                echo '</a>';
        }

            echo '<div>';
        echo '</div>';
    }

    function affichageDesEventsRetournes($type) {
        $cheminImages = '../sources/ressources/';

        echo "<div class='container containerEvent'>";

        echo "<div class='row'>";

        foreach ($type as $event) {

            echo "<div class='col-xl-4 col-lg-6 col-md-6 col-sm-12'>";
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
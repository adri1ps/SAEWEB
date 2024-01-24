<?php

include_once 'vue_generique.php';

class VueClassement extends VueGenerique {

    const URL = "../sources/ressources/";

    public function menu($filtres, $joueur) {

        $champs = ['nom', 'temps', 'ratio', 'eliminations', 'morts', 'parties', 'photoProfil'];

        echo '<div class="row border-top">';
        echo '<div class="col-xl-12 d-flex justify-content-center mt-xl-2">';

        foreach ($filtres as $filtre) {

            if (isset($filtre['COLUMN_NAME']) && is_string($filtre['COLUMN_NAME'])) {

                $columnName = htmlspecialchars($filtre['COLUMN_NAME']);
                echo '<a href="index.php?module=mod_classement&action='.$columnName.'">';
                    echo '<button type="button" class="custom-btn btn btn-primary me-xl-4 boutonAccueilClassement">';
                        echo $columnName;
                    echo '</button>';
                echo '</a>';
            }
        }
        echo '</div>';
        echo '</div>';

        if (!empty($joueur)) {

            echo "<table class='table table-classement'>";
            echo "<thead><tr><th>Nom</th><th>Temps de Jeu</th><th>Ratio</th><th>Eliminations</th><th>Morts</th><th>Parties Jouées</th><th>Photo de Profil</th></tr></thead>";
            echo "<tbody><tr>";

            foreach ($champs as $champ) {

                $valeur = isset($joueur[$champ]) ? htmlspecialchars($joueur[$champ]) : 'Non défini';
                if ($champ == 'photoProfil') {

                    echo "<td><img src='".htmlspecialchars(self::URL.$valeur)."' alt='Photo de profil' height='50'></td>";
                }
                else {

                    echo "<td>".$valeur."</td>";
                }
            }

            echo "</tr></tbody>";
            echo "</table>";
        }
    }



    public function affiche_liste($tab) {
        $champs = ['nom', 'temps', 'ratio', 'eliminations', 'morts', 'parties', 'photoProfil'];

        if (empty($tab)) {
            echo "<p>Aucune donnée de classement disponible.</p>";
            return;
        }

        echo "<table class='table table-classement'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nom</th>";
        echo "<th>Temps de Jeu</th>";
        echo "<th>Ratio</th>";
        echo "<th>Eliminations</th>";
        echo "<th>Morts</th>";
        echo "<th>Parties Jouées</th>";
        echo "<th>Photo de Profil</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($tab as $joueur) {
            // Commencez une nouvelle ligne pour chaque joueur
            echo "<tr>";
            foreach ($champs as $champ) {
                if ($champ == 'photoProfil') {
                    echo "<td><img src='".htmlspecialchars(self::URL.$joueur[$champ])."' alt='Photo de profil' height='50'></td>";
                } else {
                    // Assurez-vous d'utiliser htmlspecialchars pour éviter les failles XSS
                    echo "<td>".htmlspecialchars($joueur[$champ])."</td>";
                }
            }
            // Fin de la ligne pour ce joueur
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }


}
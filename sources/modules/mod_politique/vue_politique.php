<?php

include_once 'vue_generique.php';

class VuePolitique extends VueGenerique {

    function menu($titres, $textes) {
        echo '<div class="container containerAccueilPageContact">';
        echo '<div class="header headerPageContact">';
        echo '<h1 class="text-white titreContact">Contacter RedLine Defense</h1>';
        echo '</div>';
        $html = '';

        foreach ($titres as $index => $titre) {
            if (isset($textes[$index])) {
                $html .= '<div class="section sectionPageContact">
                    <h2 class="sousTitreContact">' . htmlspecialchars($titre['texte']) . '</h2>
                    <p class="texteContact">' . nl2br(htmlspecialchars($textes[$index]['texte'])) . '</p>
                 </div>';
            }
        }

        echo $html;
        echo '</div>';
    }
}

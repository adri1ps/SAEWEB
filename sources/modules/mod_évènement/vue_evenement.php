<?php

include_once 'vue_générique.php';

class VueEvenement extends VueGenerique {

    public function __construct() {


    }

    public function menu() {

        include_once 'page_event.html';
    }
    function afficheListe($arr) {
        if (is_array($arr) && !empty($arr)) {

            foreach ($arr as $key => $value) {
                echo '<div class="data-entry">';

                if (is_array($value)) {
                    echo '<div class="data-value-container">';
                    foreach ($value as $subKey => $subValue) {
                        echo '<div class="data-sub-entry">';
                        echo '<span class="data-sub-key">' . htmlspecialchars($subKey) . ':</span>';
                        echo '<span class="data-sub-value">' . htmlspecialchars($subValue) . '</span>';
                        echo '</div>'; // .data-sub-entry
                    }
                    echo '</div>'; // .data-value-container
                } else {
                    echo '<div>' . htmlspecialchars($value) . '</div>';
                }

                echo '</div>'; // .data-entry
            }
        }
    }

}
?>
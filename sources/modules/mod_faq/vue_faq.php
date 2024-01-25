<?php

include_once 'vue_generique.php';

class VueFAQ extends VueGenerique {

    public function affiche_faq($faqs) {
        
        echo '<div class="container containerPageFAQ mt-5">';
    
        foreach ($faqs as $faq) {
            echo '<div class="row mb-3">';
                echo '<div class="col-12">';
                    echo '<div class="card">';
                        echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . htmlspecialchars($faq['question']) . '</h5>';
                            echo '<h6 class="card-subtitle mb-2 text-muted">Date : ' . htmlspecialchars($faq['date']) . '</h6>';
                            echo '<p class="card-text">Nom du joueur : ' . htmlspecialchars($faq['nom']) . '</p>';
                            echo '<p class="card-text">' . nl2br(htmlspecialchars($faq['reponse'])) . '</p>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    
        echo '</div>';
    }

    public function affichageFormPoserQuestion() {

        echo '<div class="container mt-5">';
        echo'<h2 class="mb-4">Posez votre question</h2>';
            echo'<form action="index.php?module=mod_faq&action=poser_question" method="post" class="needs-validation" novalidate>';
                echo'<div class="mb-3">';
                    echo'<label for="question" class="form-label">Question :</label>';
                        echo'<textarea class="form-control" id="question" name="question" rows="3" required></textarea>';
                        echo'<div class="invalid-feedback">Veuillez poser votre question.</div>';
                echo'</div>';
                echo'<button type="submit" class="btn btn-primary boutonFAQ">Soumettre</button>';
            echo'</form>';
        echo'</div>';
    }

}

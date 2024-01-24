<?php

include_once 'vue_generique.php';

class VueForum extends VueGenerique {

    public function __construct() {

    }

    public function menu() {

        echo '<br><a href="index.php?module=mod_forum&&action=bienvenue">Action Bienvenue 2</a><br>';
    }

    public function bienvenue() {
        
        echo 'Bienvenue';
    }

    public function affiche_liste_msg($tab) {
        ?> 
        <div class="d-flex justify-content-center">
            <div>
                <h1>Messages postés:</h1>
                <?php foreach($tab as $values) { ?>
                    <ol class="list-group text-center">
                        <li class="list-group-item">
                            <?php echo $values['idMsg'] , $values['contenu']  ?>
                        </li>
                    </ol>
                <?php } ?>
            </div>
        </div>
        <?php
    }       


    public function form_ajoutMsg(){
        ?>
    <h2>Votre Message</h2>

        <form action="index.php?module=mod_forum&action=poster" method="post">
            <label for="texte">Champ Message:</label>
            <input type="text" id="msg" name="msg" required>
            <button type="submit"  class="btn btn-primary">Poster</button>
        </form>

        <?php
    }
}
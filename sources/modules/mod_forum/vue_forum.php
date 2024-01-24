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
        <ol class="list-group text-center">
<?php
        foreach ($tab as $values) {
?>
            <li class="list-group-item">
                <h6>Message de l'utilisateur X </h6>
                <?php echo $values['idMsg'] . " " , "Contenu :" . $values['contenu']  ?>
            </li>
<?php
        }
?>
        </ol>
<?php
    }

    public function form_ajoutMsg(){
?>
        
        <div class="fixed-bottom fixed-right p-3" style="bottom: 400px;">
        <h2>Votre Message</h2>
        <form action="index.php?module=mod_forum&action=poster" method="post">
            <div class="form-group">
                <label for="msg">Champ Message:</label>
                <input type="text" id="msg" name="msg" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Poster</button>
        </form>
    </div>
<?php
    }
}

?>


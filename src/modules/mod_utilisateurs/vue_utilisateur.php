<?php


class VueJoueurs extends VueGenerique{

    public function __construct() {
       
    }

    public function affiche_liste($tab) {
       echo "Les joueurs : \n";

        foreach($tab as $values) {
            echo "<ul>
                    <li><a href=\"index.php?module=mod_joueurs&action=details&id=" .$values['id']. "\">" .$values['nom']. "</a></li>
                </ul>";
        }
    }

    public function lien() {
        ?> 
            <ul>
                <li><a href="index.php?module=mod_joueurs&action=bienvenue">Bienvenue</a></li>
                <li><a href="index.php?module=mod_joueurs&action=liste">Liste</a></li>
                <li><a href="index.php?module=mod_joueurs&action=ajout">AjoutJoueur</a></li>
                
            </ul>

        <?php
    }

    public function detailsJoueur($joueur) {
        ?>
            <p> Detail du joueur : </p>

            <ul>
                <li> Nom : <?php echo $joueur['nom']; ?> </li>
                <li> Description : <?php echo $joueur['bio']; ?> </li> 
            </ul>
        <?php

    }


    public function afficheBievenue() {
        echo "Bienvenue";
    }



    public function form_ajout(){
        ?>
        <h2>Entrez votre nom et votre biographie :</h2>

        <form action="index.php?module=mod_joueurs&action=form" method="post">

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" ><br><br>
    
            <label for="biographie">Biographie :</label><br>
            <textarea name="biographie" id="biographie" rows="4" cols="50" ></textarea><br><br>
    
            <input type="submit" value="Envoyer">
        </form>

        <?php
    }

}
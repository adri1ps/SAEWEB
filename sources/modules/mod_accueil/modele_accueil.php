<?php

include_once 'Connexion.php';

class ModeleAccueil extends Connexion {

    public function __construct() {


    }

    public function nombreDeJoueurs() {

        $query = self :: $bdd -> prepare('SELECT COUNT(*) FROM Joueurs');
        $query -> execute();

        return $query -> fetchColumn();
    }

    public function lesTextesDePresentationDeLaPage() {

        $query = self :: $bdd -> prepare('SELECT texte FROM Textes WHERE type = "accueil"');
        $query -> execute();

        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }

}

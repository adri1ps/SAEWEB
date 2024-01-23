<?php

include_once 'Connexion.php';

class ModeleProfil extends Connexion {

    public function __construct() {


    }

    public function infosJoueurs($nomJoueur) {

        $query = self :: $bdd -> prepare('SELECT * FROM Joueurs WHERE nom = :user');
        $requete -> bindParam(':user', $nomJoueur, PDO::PARAM_STR);
        $query -> execute();

        return $query -> fetch(PDO::FETCH_ASSOC);
    }
}

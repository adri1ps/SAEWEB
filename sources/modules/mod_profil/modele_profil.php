<?php

include_once 'Connexion.php';

class ModeleProfil extends Connexion {

    public function __construct() {


    }

    public function infosJoueurs() {
        $user = $_SESSION['user'];
        $query = self :: $bdd -> prepare('SELECT * FROM Joueurs WHERE nom = :nom');
        $query -> bindParam(':nom', $user, PDO::PARAM_STR);
        $query -> execute();
        return $query -> fetch(PDO::FETCH_ASSOC);
    }
}

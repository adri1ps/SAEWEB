<?php

include_once 'Connexion.php';

class ModeleClassement extends Connexion {

    public function __construct() {


    }

    public function classementJoueursParNbKills() {

        $requete = "SELECT * FROM Joueurs ORDER BY eliminations DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParTempsJeu() {

        $requete = "SELECT * FROM Joueurs ORDER BY temps DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParRatio() {

        $requete = "SELECT * FROM Joueurs ORDER BY ratio DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParNbMorts() {

        $requete = "SELECT * FROM Joueurs ORDER BY morts DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParNbPartiesJouees() {

        $requete = "SELECT * FROM Joueurs ORDER BY parties DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function retourneClassementDuJoueurConnecte($joueur) {
        if (!empty($joueur)) {

            $requete = "SELECT * FROM Joueurs WHERE nom = :nom_user";
            $query = self :: $bdd -> prepare($requete);

            $query -> bindParam(':nom_user', $joueur, PDO::PARAM_STR);


            $query -> execute();
            return $query -> fetch(PDO::FETCH_ASSOC);
        }
        else {

            return '';
        }
    }


    public function filtres() {

        $requete ="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'dutinfopw201610' AND 
        TABLE_NAME = 'Joueurs' AND COLUMN_NAME IN ('temps', 'ratio', 'eliminations', 'morts', 'parties');";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
}
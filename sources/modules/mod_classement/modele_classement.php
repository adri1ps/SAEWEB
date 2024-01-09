<?php

include_once 'Connexion.php';

class ModeleClassement extends Connexion {

    public function __construct() {


    }


    public function classementJoueursParNbKills() {

        $requete ="SELECT nom, tempsDeJeu, ratio, nbKills, nbMorts, nbPartiesJouees, photoProfil FROM Joueurs ORDER BY nbKills DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParTempsJeu() {

        $requete ="SELECT nom, tempsDeJeu, ratio, nbKills, nbMorts, nbPartiesJouees, photoProfil FROM Joueurs ORDER BY tempsDeJeu DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParRatio() {

        $requete ="SELECT nom, tempsDeJeu, ratio, nbKills, nbMorts, nbPartiesJouees, photoProfil FROM Joueurs ORDER BY ratio DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParNbMorts() {

        $requete ="SELECT nom, tempsDeJeu, ratio, nbKills, nbMorts, nbPartiesJouees, photoProfil FROM Joueurs ORDER BY nbMorts DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
    public function classementJoueursParNbPartiesJouees() {

        $requete ="SELECT nom, tempsDeJeu, ratio, nbKills, nbMorts, nbPartiesJouees, photoProfil FROM Joueurs ORDER BY nbPartiesJouees DESC";
        $query = self :: $bdd -> prepare($requete);
        $query -> execute();
        return $query -> fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

include_once 'Connexion.php';

class ModelePolitique extends Connexion {

    public function __construct() {


    }

    public function retourneLesTextesEnFonctionDuTypeChoisi($type) {

        $requete = self :: $bdd -> prepare('SELECT idTexte, texte FROM Textes WHERE type = :type');
        $requete -> bindParam(':type', $type, PDO::PARAM_STR);
        $requete -> execute();
        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }
}

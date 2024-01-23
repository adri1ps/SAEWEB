<?php

include_once 'Connexion.php';

class ModeleInfos extends Connexion {

    public function __construct() {


    }

    public function retourneLesActeurs() {

        $requete = self :: $bdd -> prepare('SELECT type, sprite FROM ActeursDuJeu');
        $requete -> execute();

        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function retourneInfosDesTours() {

        $requete = self :: $bdd -> prepare('SELECT type, sprite, cout, pv, portee, cadenceDeTir, projectileTir, texte FROM Tours');
        $requete -> execute();

        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }
}
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

    public function retourneInfosDesSoldats() {

        $requete = self :: $bdd -> prepare('SELECT type, sprite, pv, vitesse, dégâts, portée, texte FROM Soldats');
        $requete -> execute();

        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function retourneInfosDesProjectiles() {

        $requete = self :: $bdd -> prepare('SELECT type, sprite, précision, vitesse, dégâts, texte FROM Projectiles');
        $requete -> execute();

        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }
}
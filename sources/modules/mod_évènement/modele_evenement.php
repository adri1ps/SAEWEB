<?php

include_once 'Connexion.php';

class ModeleEvenement extends Connexion {

    public function __construct() {


    }

    public function event($type) {

        $requete = self :: $bdd -> prepare('SELECT idEvent, date, texte, logo FROM Evenement WHERE type = :type');
        $requete -> bindParam(':type', $type, PDO::PARAM_STR);
        $requete -> execute();
        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
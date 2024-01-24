<?php

include_once 'Connexion.php';

class ModeleStatistique extends Connexion {

    public function __construct() {


    }

    public function statsJoueurs($user) {

        $query = self :: $bdd -> prepare('SELECT * FROM Joueurs WHERE nom = :nom');
                $query -> bindParam(':nom', $user, PDO::PARAM_STR);
                $query -> execute();

                return $query -> fetch(PDO::FETCH_ASSOC);

    }
}

?>
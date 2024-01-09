<?php

include_once 'Connexion.php';

class ModeleConnexion extends Connexion {

    public function __construct() {


    }

    public function autorisationConnexion() {

        if ($this -> loginEtMdpPasVide()) {

            $user_name = htmlspecialchars($_POST['login']);
            $user_password = htmlspecialchars($_POST['mdp']);
    
           
            $query = self :: $bdd -> prepare("SELECT mot_de_passe FROM Joueurs WHERE nom = :login");
            $query -> bindParam(':login', $user_name, PDO::PARAM_STR);
            $query -> execute();

            $row = $query -> fetch(PDO::FETCH_ASSOC);
            $mdpHashed = $row['mot_de_passe'];
    
            if ($row && password_verify($user_password, $mdpHashed)) {
    
                $_SESSION['user'] = $user_name;
                return true; 
            }
        }
    
        return false;
    }

    public function loginEtMdpPasVide() {

        return !empty($_POST['login']) && !empty($_POST['mdp']);
    }


}


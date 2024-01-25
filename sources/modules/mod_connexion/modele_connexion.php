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
            if ($row) {

                $mdpHashed = $row['mot_de_passe'];
                if (password_verify($user_password, $mdpHashed)) {

                    $_SESSION['user'] = $user_name;
                    return true;
                }
            }

            $_SESSION['error'] = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    
        return false;
    }

    public function loginEtMdpPasVide() {

        return !empty($_POST['login']) && !empty($_POST['mdp']);
    }


}


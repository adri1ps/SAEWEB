<?php

include_once 'Connexion.php';

class ModeleInscription extends Connexion {

    public function __construct() {


    }

    public function creationUtilisateur() {

        if ($this -> toutesLesInfosNonVides()) {

            $user_name = htmlspecialchars($_POST['nomInsc']);
            $user_email = htmlspecialchars($_POST['emailInsc']);
            $user_password = htmlspecialchars($_POST['mdpInsc']);
            $user_password_confirm = htmlspecialchars($_POST['mdpConfirmInsc']);
            $user_conditions = htmlspecialchars($_POST['conditionsInsc']);

            if ($this -> emailDejaPrise($user_email) || $this -> nomUtilisateurDejaPris($user_name) || !$this -> mdpEtMdpConfirmSimilaires($user_password, $user_password_confirm)) {

                return false;
            }
            else {

                $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
                $query = self :: $bdd -> prepare("INSERT INTO Joueurs (nom, mot_de_passe, temps, email, abonnement, ratio, eliminations, morts, parties, biographie) 
                VALUES (:user, :mdp, 12, :courriel, 12, 2.5, 12, 21, 2, 'je suis un nouvel utilisateur...')");
                $query -> bindValue(':user', $user_name);
                $query -> bindValue(':mdp', $hashed_password);
                $query -> bindValue(':courriel', $user_email);
                return $query -> execute();
            }
        }
        else {

            return false;
        }
    }

    public function toutesLesInfosNonVides() {

        return !empty($_POST['nomInsc']) && !empty($_POST['emailInsc']) && !empty($_POST['mdpInsc']) && !empty($_POST['mdpConfirmInsc']) && !empty($_POST['conditionsInsc']);
    }

    public function nomUtilisateurDejaPris($login) {

        $requete = self :: $bdd -> prepare("SELECT COUNT(*) FROM Joueurs WHERE nom = :login");
        $requete -> bindParam(':login', $login, PDO::PARAM_STR);
        $requete -> execute();

        $nombre = $requete -> fetchColumn();
        return $nombre > 0;
    }

    public function emailDejaPrise($email) {

        $requete = self :: $bdd -> prepare("SELECT COUNT(*) FROM Joueurs WHERE email = :courriel");
        $requete -> bindParam(':courriel', $email, PDO::PARAM_STR);
        $requete -> execute();

        $nombre = $requete -> fetchColumn();
        return $nombre > 0;

    }

    public function mdpEtMdpConfirmSimilaires($mdp, $mdpConf) {

        if (strcmp($mdp, $mdpConf) == 0) {

            return true;
        }
        else {

            return false;
        }
    }
}

<?php

include_once 'Connexion.php';

class ModeleInscription extends Connexion {

    public function __construct() {


    }

    public function creationUtilisateur() {
        if ($this->toutesLesInfosNonVides()) {
            $user_name = htmlspecialchars($_POST['nomInsc']);
            $user_email = htmlspecialchars($_POST['emailInsc']);
            $user_password = htmlspecialchars($_POST['mdpInsc']);
            $user_password_confirm = htmlspecialchars($_POST['mdpConfirmInsc']);

            if ($this->nomUtilisateurDejaPris($user_name)) {
                $_SESSION['error'] = "Le nom d'utilisateur est déjà pris.";
                return false;
            }

            if ($this->emailDejaPrise($user_email)) {
                $_SESSION['error'] = "L'adresse e-mail est déjà utilisée.";
                return false;
            }

            if (!$this->mdpEtMdpConfirmSimilaires($user_password, $user_password_confirm)) {
                $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
                return false;
            }

            $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

            $temps = rand(0, 100);
            $abonnement = rand(0, 1);
            $ratio = rand(1, 5) + rand(0, 99) / 100;
            $eliminations = rand(0, 500);
            $morts = rand(0, 500);
            $parties = rand(0, 100);

            $query = self::$bdd->prepare("INSERT INTO Joueurs (nom, mot_de_passe, temps, email, abonnement, ratio, eliminations, morts, parties, biographie) 
            VALUES (:user, :mdp, :temps, :courriel, :abonnement, :ratio, :eliminations, :morts, :parties, 'je suis un nouvel utilisateur...')");
            $query->bindValue(':user', $user_name);
            $query->bindValue(':mdp', $hashed_password);
            $query->bindValue(':temps', $temps);
            $query->bindValue(':courriel', $user_email);
            $query->bindValue(':abonnement', $abonnement);
            $query->bindValue(':ratio', $ratio);
            $query->bindValue(':eliminations', $eliminations);
            $query->bindValue(':morts', $morts);
            $query->bindValue(':parties', $parties);

            return $query->execute();
        } else {
            $_SESSION['error'] = "Toutes les informations sont requises.";
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

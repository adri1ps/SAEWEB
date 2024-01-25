<?php

include_once 'Connexion.php';

class ModeleProfil extends Connexion {

    public function __construct() {
    }

    public function infosJoueurs() {
        $user = $_SESSION['user'];
        $query = self :: $bdd -> prepare('SELECT * FROM Joueurs WHERE nom = :nom');
        $query -> bindParam(':nom', $user, PDO::PARAM_STR);
        $query -> execute();
        return $query -> fetch(PDO::FETCH_ASSOC);
    }
    public function modifier($user){

        $user_password = $this->verifValeursAuto(htmlspecialchars($_POST['mdpModif']),'0');
        $user_password_confirm = $this->verifValeursAuto(htmlspecialchars($_POST['mdpConfirmModif']),'0');

        if((($user_password != '0' && $user_password_confirm !='0') && $user_password == $user_password_confirm) ) {

            $user_name = $this->verifValeursAuto(htmlspecialchars(($_POST['nomModif'])), $user['nom']);
            $user_email = $this->verifValeursAuto(htmlspecialchars(($_POST['emailModif'])), $user['email']);
            $user_bio = htmlspecialchars($_POST['bioModif']);

            $_POST['nomModif'] = $user_name;

            $query = self :: $bdd -> prepare("SELECT mot_de_passe FROM Joueurs WHERE nom = :login");
            $query -> bindParam(':login', $user['nom'], PDO::PARAM_STR);
            $query -> execute();

            $row = $query -> fetch(PDO::FETCH_ASSOC);
            $mdpHashed = $row['mot_de_passe'];

            if($row && password_verify(htmlspecialchars($_POST['reelmdpModif']), $mdpHashed)){

                $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
                $query = self :: $bdd -> prepare("UPDATE Joueurs set nom = :user, email = :email, biographie = :bio, mot_de_passe = :mdp where idJoueur = :id ");
                $query -> bindValue(':user', $user_name);
                $query -> bindValue(':mdp', $hashed_password);
                $query -> bindValue(':email', $user_email);
                $query -> bindValue(':bio', $user_bio);
                $query -> bindValue(':id',$user['idJoueur']);


                return $query -> execute();
            }
            else {
                return false;
            }
        }
        else{
            return false;
        }
    }
    public function verifValeursAuto($valeur2,$valeur3){
        $valeur2 = trim($valeur2);
        if ($valeur2 == ''){
            $valeur1=$valeur3;
        }
        else {
            $valeur1 = $valeur2;
        }
        return $valeur1;
    }




}

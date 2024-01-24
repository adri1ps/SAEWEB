<?php

include_once 'Connexion.php';

class ModeleForum extends Connexion {

    public function __construct() {}

    public function getListeMessage() {
        $query = self::$bdd->prepare("SELECT * FROM Message");
        $query->execute();
        $tab = $query->fetchAll();
        return $tab;
    }




    public function infosJoueurs($user) {
        $query = self :: $bdd -> prepare('SELECT idJoueur FROM Joueurs WHERE nom = :nom');
        $query -> bindParam(':nom', $user, PDO::PARAM_STR);
        $query -> execute();
    
        return $query -> fetch(PDO::FETCH_ASSOC);
    }


    public function insertMessage() {
        
        if (isset($_SESSION['user'])) {
            $login = $_SESSION['user'];
            $idJoueur = $this->getIdJoueurFromLogin($login);
          
          
            var_dump($idJoueur);
    
         

    
            if (isset($_POST['msg'])) {
                $query = self::$bdd->prepare("INSERT INTO Message(idJoueur, contenu, date, heure) VALUES(?, ?, NOW(), NOW())");
                $query->execute(array(
                    htmlentities($idJoueur),
                    htmlspecialchars($_POST['msg'])
                ));
                return true;
            }
        }
        
    
        return false;

        
    }
    

    private function getIdJoueurFromLogin($login) {
        
    
    
        $stmt = self::$bdd->prepare("SELECT idJoueur FROM Joueurs WHERE nom = :nom");
        $stmt -> bindParam(':nom', $login, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchColumn();
        
        return $result ;
    }
    
}

?>

<?php

include_once 'Connexion.php';

class ModeleFAQ extends Connexion {

    public function __construct() {


    }

    public function retourneLesDonneesDeLaFAQ() {

        $requete = self :: $bdd -> prepare('SELECT f.date, f.question, f.reponse, j.nom 
        FROM Faq f JOIN Joueurs j ON f.idJoueur = j.idJoueur ORDER BY idQuestion');
        $requete -> execute();

        return $requete -> fetchAll(PDO::FETCH_ASSOC);
    }

    private function getIdJoueurFromLogin($login) {
        
        $stmt = self::$bdd -> prepare("SELECT idJoueur FROM Joueurs WHERE nom = :nom");
        $stmt -> bindParam(':nom', $login, PDO::PARAM_STR);
        $stmt->execute();
         
        $result = $stmt -> fetchColumn();
        return $result ;
    }

    public function insertQuestion() {
        if (isset($_SESSION['user'])) {
            $login = $_SESSION['user'];
            $idJoueur = $this->getIdJoueurFromLogin($login);
            
            if (isset($_POST['question'])&& !empty(trim($_POST['question']))) {
                $requete = self::$bdd->prepare('INSERT INTO Faq(date, question, idJoueur) VALUES (NOW(), ?, ?)');
                $requete->execute(array(htmlspecialchars($_POST['question']), $idJoueur));
                return true;
            }
        }
        return false;
    }
    

}

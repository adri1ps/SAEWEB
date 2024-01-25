<?php

include_once 'Connexion.php';

class ModeleForum extends Connexion {

    public function __construct() {}

    public function getListeMessageAvecInfoJoueur() {
        $query = self::$bdd->prepare("SELECT Message.*, Joueurs.nom  FROM Message
                                      INNER JOIN Joueurs ON Joueurs.idJoueur = Message.idJoueur ORDER BY date DESC");
        $query->execute();
        $tab = $query->fetchAll();
        return $tab;
    }

    public function insertMessage() {
        
        if (isset($_SESSION['user'])) {
            $login = $_SESSION['user'];
            $idJoueur = $this->getIdJoueurFromLogin($login);
         
            if (isset($_POST['msg']) && isset($_POST['topic'])) {
                $query = self::$bdd->prepare("INSERT INTO Message(idJoueur,contenu,topic,date) VALUES(?,?,?,NOW())");
                $query->execute(array(
                    htmlentities($idJoueur),
                    htmlspecialchars($_POST['msg']),
                    htmlspecialchars($_POST['topic'])
                ));
                return true;
            }
        }
        
        return false;
    }

    private function getIdJoueurFromLogin($login) {
        $stmt = self::$bdd->prepare("SELECT idJoueur FROM Joueurs WHERE nom = :nom");
        $stmt->bindParam(':nom', $login, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchColumn();
        return $result;
    }
}

?>

<?php



class  ModeleJoueurs extends Connexion{


public function __construct() {
       
    }

    public function getListe() {
        $query = self::$bdd->prepare("SELECT * FROM joueurs");
        $query->execute();
        $tab = $query->fetchAll();
        return $tab;
    }
    

    public function getJoueur($id) {
        $query = self::$bdd->prepare("SELECT * FROM joueurs WHERE id = ?");
        $query->execute(array($id));
        $joueur = $query->fetch();
        return $joueur;
    }

    public function creerJoueur() {
        if(isset($_POST['nom']) && isset($_POST['biographie'])) {
            $query = self::$bdd->prepare("INSERT INTO joueurs(nom,bio) VALUES(?,?)");
            $query->execute(array(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['biographie'])));
            return true; 
        }else {
            return false; 
        }
    }
}
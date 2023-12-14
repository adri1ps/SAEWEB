<?php



class ModeleConnexion extends Connexion{

    public function __construct() {
       
    }

    public function createUser() {
        if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
            $user_name = htmlspecialchars($_POST['user_name']);
            $user_password = htmlspecialchars($_POST['user_password']);
    
           
            $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    
            
            $query = self::$bdd->prepare("INSERT INTO utilisateur(login, mdp) VALUES(?, ?)");
            
            if ($query->execute(array($user_name, $hashed_password))) {
                return true;
            } else {
                
                return false;
            }
        } else {
            return false;
        }
    }

    public function verifyConnection() {
        if (isset($_POST['loginConx']) && isset($_POST['mdpConx'])) {
            $user_name = htmlspecialchars($_POST['loginConx']);
            $user_password = htmlspecialchars($_POST['mdpConx']);
    
           
            $query = self::$bdd->prepare("SELECT login, mdp FROM utilisateur WHERE login = ?");
            $query->execute(array($user_name));
            $row = $query->fetch();
    
            if ($row && password_verify($user_password, $row['mdp'])) {
    
                $_SESSION['loginConx'] = $_POST['loginConx'];
                return true; 
            }
        }
    
        return false;
    }
    
    
    
}


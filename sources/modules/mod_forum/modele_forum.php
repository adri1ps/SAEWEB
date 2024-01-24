<?php

include_once 'Connexion.php';

class ModeleForum extends Connexion {

   
    public function __construct() {}

    public function getListeMessage() {
        $query = self::$bdd->prepare("SELECT * FROM message");
        $query->execute();
        $tab = $query->fetchAll();
        return $tab;
    }



    public function insertMessage() {
        if(isset($_POST['msg'])) {
            $query = self::$bdd->prepare("INSERT INTO message(contenu) VALUES(?)");
            $query->execute(array(
                htmlspecialchars($_POST['msg']))
            );
            return true; 
        }else {
            return false; 
        }
    }
}

?>
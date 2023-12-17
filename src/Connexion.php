<?php

class Connexion {

    protected static $bdd;
    
    public static function init_Connexion() {
   
        $dsn = "mysql:host=localhost;dbname=ButInfo";
        $username = "ButInfo";
        $password = "12345";
        
        try {
            self::$bdd = new PDO($dsn, $username, $password);
        }catch(PDOException $e) {
            die("Error: ".$e->getMessage());
        }
    }
}

?>
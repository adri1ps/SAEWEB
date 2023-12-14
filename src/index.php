<?php

session_start();
require_once("Connexion.php");
require_once("vue_generique.php");
include("template.php");


$con = new Connexion();
$vueGen = new VueGenerique();
$con->init_Connexion();
$module = isset($_GET['module']) ? $_GET['module'] : "mod_connexion"; 
$vueAffichage = $vueGen->getAffichage();

    
    switch($module){
        case"mod_utilisateur":
            include_once 'modules/mod_utilisateur/mod_utilisateur.php';
            $modJ = new ModJoueurs();
        break;
        case"mod_connexion":
            include_once 'modules/mod_connexion/mod_connexion.php';
            $modC = new ModConnexion();
        break;
        default;
            die("Module Par Default \n ProjetWEB ");            
    }
         echo $vueAffichage ;

?>
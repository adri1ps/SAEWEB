<?php

include_once 'modules/mod_classement/mod_classement.php';
include_once '/home/etudiants/info/apons/local_html/SAEWEB/WEB/composants/comp_footer/comp_footer.php';
include_once '/home/etudiants/info/apons/local_html/SAEWEB/WEB/composants/comp_header/comp_header.php';
include_once '/home/etudiants/info/apons/local_html/SAEWEB/WEB/composants/comp_titre/comp_titre.php';
include_once '/home/etudiants/info/apons/local_html/SAEWEB/WEB/composants/comp_barreRecherche/comp_barreRecherche.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $actionMenu = (isset($_GET['module'])) ? $_GET['module'] : 'index.php';
    $module = null;

    switch ($actionMenu) {

        case 'mod_profil':

            echo 'bonjour';
            break;
        case 'mod_connexion':

            echo 'b';
            break;
        case 'mod_inscription':

            echo 'ji';
            break;
        case 'mod_infos':

            echo 'bon';
            break;
        case 'mod_forum':

            echo 'bo';
            break;
        case 'mod_évènement':

            echo 'j';
            break;
        case 'mod_classement':

            $module = New ModClassement();
            break;
        case 'mod_a_propos':

            echo 'alo';
            break;
        case 'mod_faq':
            
            echo 'lkl';
            break;
        case 'mod_contact':

            echo 'aloa';
            break;
        case 'mod_politique':
                
            echo 'lkla';
            break;

    }

    $header = New CompHeader();

    $titre = New CompTitre();

    $barre = New CompBarreRecherche();

    $footer = New CompFooter();


    include_once 'home.php';
?>

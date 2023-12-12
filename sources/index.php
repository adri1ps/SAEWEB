<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    echo 'bonjour';
    $actionMenu = (isset($_GET['module'])) ? $_GET['module'] : 'index.php';
    $module = 'null';

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

            echo 'farid';
            break;

    }







?>

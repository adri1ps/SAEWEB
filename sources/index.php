<?php

include_once 'modules/mod_classement/mod_classement.php';
include_once 'modules/mod_inscription/mod_inscription.php';
include_once 'modules/mod_forum/mod_forum.php';
include_once 'modules/mod_profil/mod_profil.php';
include_once 'modules/mod_infos/mod_infos.php';
include_once 'modules/mod_évènement/mod_évènement.php';
include_once '/Users/arsanabdi/PhpstormProjects/SAEWEB/composants/comp_footer/comp_footer.php';
include_once '/Users/arsanabdi/PhpstormProjects/SAEWEB/composants/comp_header/comp_header.php';
include_once '/Users/arsanabdi/PhpstormProjects/SAEWEB/composants/comp_titre/comp_titre.php';
include_once '/Users/arsanabdi/PhpstormProjects/SAEWEB/composants/comp_barreRecherche/comp_barreRecherche.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    $_SESSION['user'] = 'null';

    $actionMenu = (isset($_GET['module'])) ? $_GET['module'] : 'index.php';
    $tampon = '';
    $module = null;

    switch ($actionMenu) {

        case 'mod_profil':

            $module = New ModProfil();
            break;
        case 'mod_seConnecter':

            echo 'b';
            break;
        case 'mod_inscription':

            $module = New ModInscription();
            break;
        case 'mod_infos':

            $module = New ModInfos();
            break;
        case 'mod_forum':

            $module = New ModForum();
            break;
        case 'mod_évènement':

            $module = New ModÉvènement();
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

    if ($module !== null) {

        $tampon = $module -> getAffichage();
    }

    include_once 'home.php';
?>

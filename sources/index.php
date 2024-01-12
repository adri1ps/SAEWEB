<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css2/bootstrap.css">
    <title>Home Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="js2/bootstrap.js"></script>
</head>
<body class="d-flex flex-column">

<?php

require_once 'modules/mod_classement/mod_classement.php';
require_once 'modules/mod_inscription/mod_inscription.php';
require_once 'modules/mod_forum/mod_forum.php';
require_once 'modules/mod_profil/mod_profil.php';
require_once 'modules/mod_accueil/mod_accueil.php';
require_once 'modules/mod_infos/mod_infos.php';
require_once 'modules/mod_connexion/mod_connexion.php';
require_once 'modules/mod_evenement/mod_evenement.php';
include_once 'composants/comp_header/comp_header.php';
include_once 'composants/comp_footer/comp_footer.php';
include_once 'composants/comp_retour_bouton/comp_bouton.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$actionMenu = (isset($_GET['module'])) ? $_GET['module'] : 'mod_accueil';
$tampon = '';
$module = null;

switch ($actionMenu) {

    case 'mod_profil':

        $module = New ModProfil();
        break;
    case 'mod_connexion':

        $module = New ModConnexion();
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
    case 'mod_evenement':

        $module = New ModEvenement();
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
    default:

        $module = New ModAccueil();
        break;

}

if ($module !== null) {

    $tampon = $module -> getAffichage();
}

?>

    <header>
        <div class="py-xl-2 py-lg-2 py-md-1 row fixed-top" style="background-color: #031633; z-index: 1030;">
            <?php $compHeader = New CompHeader(); $compHeader->afficheHeader(); ?>
        </div>

        <!-- Utilisez 'justify-content-center' pour centrer le bouton, et 'mx-auto' pour appliquer une marge automatique sur les côtés -->
        <div id="boutonRetour" class="fixed-top d-flex" style="top: 150px; left: 0; right: 0; z-index: 1029; width: 100%;">
            <div class="row justify-content-center">
                <div class="col-xl-1">
                    <?php $compBouton = New CompBouton(); $compBouton->afficheBouton(); ?>
                </div>
            </div>
        </div>
    </header>


    <main style="flex: 1 0 auto; margin-top: 300px; margin-bottom: 300px;" class="d-flex flex-column align-items-center">
        <?php echo $tampon;?>
    </main>


    <footer class="border-top" style="background-color: #031633; color: white">
        <?php $compFooter = New CompFooter();    $compFooter -> afficheFooter();?>
    </footer>

    <script>
    window.addEventListener('scroll', function() {
        var bouton = document.getElementById('boutonRetour');
        // Utilisez une valeur de défilement spécifique ou calculez-la en fonction du contenu de votre page.
        var seuilDeDefilement = 80; // Par exemple, la hauteur de votre en-tête plus un peu de marge.

        if (window.pageYOffset > seuilDeDefilement) {
            // Si l'utilisateur a défilé au-delà du seuil, masquez le bouton
            bouton.style.visibility = 'hidden';
        } else {
            // Sinon, affichez-le
            bouton.style.visibility = 'visible';
        }
    });
</script>


</body>
</html>
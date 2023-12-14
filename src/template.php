<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="pageConnexionn.css">

    <title>ProjectWEB</title>

</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?module=mod_joueurs">Acceuil</a></li>
            <li><a href="index.php?module=mod_connexion">MonCompte</a></li>
        </ul>
    </nav>
    <main>
        <div id="footer-container">
            <div id="form-container">
                <?php if (isset($_SESSION['loginConx'])) { ?>
                <a href="index.php?module=mod_connexion&action=deco">Deconnexion</a>
                <?php } ?>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </main>

    <footer class="footer-container">
        <img src="ressources/titleO.png" alt="LogoJeu" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
        <p>© Red Line 2023. Tous droits réservés</p>
    </footer>

</body>
</html>
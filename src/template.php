<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pageConnexion.css">

    <title>ProjectWEB</title>

</head>

<body>
    <header>
        <div class="wrapper">
            <nav>
                <div class="nav-container">

                    <ul>
                        <li><a href="index.php?module=mod_joueurs"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                                </svg></a></li>

                        <div class="nav-img">
                            <img src="ressources/titleO.png" alt="LogoJeu" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>

                        <li class="person-icon"><a href="index.php?module=mod_connexion"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg></a></li>

                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="wrapper">
            <div id="form-container">
                <?php if (isset($_SESSION['loginConx'])) { ?>
                    <a href="index.php?module=mod_connexion&action=deco">Deconnexion</a>
                <?php } ?>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        </div>
    </main>

    <footer>
        <div class="wrapper">
            <img src="ressources/titleO.png" alt="LogoJeu" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            <p>© Red Line 2023. Tous droits réservés</p>
        </div>
    </footer>

</body>

</html>
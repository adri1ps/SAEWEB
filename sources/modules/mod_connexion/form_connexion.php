<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img class="w-100" src="ressources/titreRedLineLogo.png" alt="Logo du Titre">
                                    <h4 class="mt-1 mb-5 pb-1">Bienvenue sur RedLineDefense</h4>
                                </div>
                                <?php
                                echo '<div class="d-inline-block">';
                                    $errorMessage = $_SESSION['error'] ?? '';
                                    if (!empty($errorMessage)) {
                                        echo '<div class="alert alert-danger d-flex justify-content-center mx-auto">' . $errorMessage . '</div>';
                                        unset($_SESSION['error']);
                                    }
                                echo '</div>';
                                ?>
                                <form action="index.php?module=mod_connexion&action=connexion" method="post">
                                    <p>Connecter vous à votre compte </p>

                                    <div class="form-group">
                                        <input type="texteConnexion" id="loginDeConnexion" name="login" class="form-control" required placeholder="lewinner44"/>
                                        <label class="form-label" for="loginDeConnexion">Nom d'utilisateur</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="passwordConnexion" id="mdp" name="mdp" class="form-control" required placeholder="************"/>
                                        <label class="form-label" for="mdpDeConnexion">Mot de passe</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">
                                            Connexion
                                        </button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Pas encore inscrit ?</p>
                                        <button type="button" class="btn btn-outline-danger"><a
                                                href="index.php?module=mod_inscription">S'inscrire</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <img class="w-100" src="ressources/fond.jpg" alt="Logo du Titre">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

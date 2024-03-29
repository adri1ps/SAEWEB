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
                                <form action="index.php?module=mod_inscription&action=inscription" method="post">
                                    <p>Creer votre compte</p>

                                    <div class="form-group">
                                        <input type="text" id="loginDeInscription" name="nomInsc" class="form-control" required placeholder="lewinner44"/>
                                        <label class="form-label" for="loginDeConnexion">Nom d'utilisateur</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" id="email" name="emailInsc" required placeholder="lewinner44@gmail.com">
                                        <label for="emailDeInscription">Adresse mail</label>

                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="mdp" name="mdpInsc" class="form-control" required placeholder="************"/>
                                        <label class="form-label" for="mdpDeConnexion">Mot de passe</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="mdpConfirm" name="mdpConfirmInsc" required placeholder="************">
                                        <label for="mdpConfirmDeInscription">Confirmer le mot de passe</label>

                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-center mt-3">
                                        <input type="checkbox" id="conditions" name="conditionsInsc" class="me-2" required>
                                        <label for="conditions">J'accepte les termes et conditions</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Inscription</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Déjà inscrit ?</p>
                                        <button type="button" class="btn btn-outline-danger">
                                            <a href="index.php?module=mod_connexion">Se connecter</a>
                                        </button>
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





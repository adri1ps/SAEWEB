<div class="profil">
    <nav>
        <img src="<?php echo $user['photoProfil']; ?>" alt="Photo de profil" class="photo-profil">
        <div class="infos-utilisateur">
            <p><?php echo $nom; ?></p>
            <p><?php echo $email; ?></p>
        </div>
    </nav>
    <section>
        <div class="biographie">
            <h2>Biographie</h2>
            <p> <?php echo $biographie; ?> </p>
        </div>
        <div class="lien-vers-page">
            <a href="lien_vers_autre_page.php">Lien vers une autre page</a>
        </div>
        <div class="valeurs-recuperees">
            <h2>Valeurs récupérées</h2>
            <!-- Ajoutez ici le code pour afficher les valeurs récupérées de la base de données -->
        </div>
    </section>


</div>
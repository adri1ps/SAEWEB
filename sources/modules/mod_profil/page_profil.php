<div class="profil">
    <h1 class="titrePageProfil">Profil</h1>
    <div class="profil-container">
        <section class="sectionPageProfil">
            <div class="biographie">
                <h2><?php echo $nom; ?></h2>
                <p class="textePageProfil"> <?php echo $biographie; ?></p>
            </div>
            <div class="valeurs-recuperees">
                <div class="Historique-victoire">
                    <h4>Dernières performances :</h4>
                    <ul>
                        <li>Victoire</li>
                        <li>Défaite </li>
                        <li>Défaite</li>
                        <li>Victoire</li>
                        <li>Victoire</li>
                    </ul>
                </div>
                <div class="statistique">
                    <h4>Statistiques :</h4>
                    <ul>
                        <li>Abonnement : <?php echo $abonnement; ?> </li>
                        <li>Ration : <?php echo $ratio; ?></li>
                        <li>Nombre de kills : <?php echo $nbKills; ?></li>
                        <li>Nombre de morts : <?php echo $nbMorts; ?></li>
                        <li>Nombre de parties jouée : <?php echo $nbPartiesJouees; ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <nav class="navPageProfil">
            <div class="image-container">
                <img src="ressources/<?php echo $pp; ?>" alt="Photo de profil" class="photo-profil">
            </div>
            <div class="infos-utilisateur">
                <p class="textePageProfil"><?php echo $email; ?></p>
                <h5> Temps de jeu : <?php echo $temps?>h</h5>
            </div>
        </nav>
    </div>
</div>
<a href="index.php?module=mod_profil&&action=modifierProfil" class="btn btn-custom btn-lg" role="button" aria-pressed="true">Modifier le profil</a>

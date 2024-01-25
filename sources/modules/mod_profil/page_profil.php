<div class="profil">
    <h1>Profil</h1>
    <div class="profil-container">
    <section>
        <div class="biographie">
            <h2><?php echo $nom; ?></h2>
            <p> <?php echo $biographie; ?></p>
        </div>
        <div class="valeurs-recuperees">
            <h4>Dernières performance :</h4>
            <ul>
                <li>Victoire</li>
                <li>Défaite </li>
                <li>Défaite</li>
                <li>Victoire</li>
                <li>Victoire</li>
            </ul>
        </div>
    </section>
    <nav>
        <div class="image-container">
        <img src="ressources/<?php echo $pp; ?>" alt="Photo de profil" class="photo-profil">
        </div>
        <div class="infos-utilisateur">
            <p><?php echo $email; ?></p>
        </div>
    </nav>
    </div>
</div>
<a href="index.php?module=mod_profil&&action=modifierProfil" target="_blank" class="btn btn-custom btn-lg" role="button" aria-pressed="true">Modifier le profil</a>
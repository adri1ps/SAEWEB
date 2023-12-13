<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
  <header>
    <div class="hautdepage">
    <div class="nav">
      <ul class="liste">
        <li><a href="index.php?module=mod_profil" id="menu1">Mon Profil</a></li>
        <li><a href="index.php?module=mod_connexion" id="menu2">Se Connecter</a></li>
        <li><a href="index.php?module=mod_inscription" id="menu3">S'inscrire gratuitement</a></li>
        <li><a href="index.php?module=mod_infos" id="menu4">Infos sur le Jeu</a></li>
        <li><a href="index.php?module=mod_forum" id="menu5">Forum</a></li>
        <li><a href="index.php?module=mod_évènement" id="menu6">Évènement</a></li>
        <li><a href="index.php?module=mod_classement" id="menu7">Classement</a></li>
      </ul>
    </div>
    <div class="images">
      <div class="divProfil">
        <a href="index.php?module=mod_profil"><img src="ressources/profilLogo.png" alt="Logo du Profil" class="profil"></a>
      </div>
      <div class="divLogo">
        <a href="#"><img src="ressources/OnePieceLogo.png" alt="Logo" class="logo"></a>
      </div>
    </div>

  </div>
  <div class="titre">
    <div class="lienTitre">
      <a href="index.php?"><img src="ressources/titreRedLineLogo.png" alt="Logo du Titre" class="imageTitre"></a>
    </div>
  </div>
  </header>
  <main>
    <div class="barreRecherche">
      <form action="#" method="get" class="formDeRecherche">
        <input type="text" name="search" placeholder="Rechercher...">
        <button type="submit">Rechercher</button>
      </form>
    </div>
  </main>
  <footer>
    <ul class="listeFooter">
      <li><a href="index.php?module=mod_a_propos" id="listeFooter1-2-3-4">À propos</a></li>
      <li><a href="index.php?module=mod_faq" id="listeFooter1-2-3-4">FAQ</a></li>
      <li><a href="index.php?module=mod_contact" id="listeFooter1-2-3-4">Contactez nous</a></li>
      <li><a href="index.php?module=mod_politique" id="listeFooter1-2-3-4">Politique de confidentialité</a></li>
    </ul>
    <ul class="listeRéseaux">
      <li id="liFB">
        <a href="https://www.facebook.com/" target="_blank"><img src="ressources/FacebookLogo.png"  alt="Logo Facebook" class="imageRéseau"></a>
      </li>
      <li id="liINSTA">
        <a href="https://www.instagram.com/arsanmessi/" target="_blank"><img src="ressources/InstagramLogo.png" alt="Logo Instagram" class="imageRéseau"></a>
      </li>
      <li id="liYTB">
        <a href="https://www.youtube.com/" target="_blank"><img src="ressources/YoutubeLogo.png" alt="Logo YouTube" class="imageRéseau"></a>
      </li>
    </ul>
  </footer>
</body>
</html>
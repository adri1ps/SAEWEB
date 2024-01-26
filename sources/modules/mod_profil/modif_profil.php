<div class="container-profil-page">
    <form id="formProfil" action="index.php?module=mod_profil&&action=modification" method="POST" enctype="multipart/form-data">
        <h2>MODIFICATION</h2>
        <div class="form-group">
            <label for="nom">Nouveau nom:</label>
            <input type="text" id="nom" name="nomModif" required placeholder="Legagnant56" value="<?php echo $nom; ?>">
        </div>
        <div class="form-group">
            <label for="email">Nouvel email:</label>
            <input type="email" id="email" name="emailModif" required placeholder="legagnant56@gmail.com" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="bio">Nouvel email:</label>
            <input type="text" id="bio" name="bioModif" required placeholder="Je suis legagnant56" value="<?php echo $biographie; ?>">
        </div>
        <div class="form-group">
            <label for="mdpDeModif">Nouveau mot de passe:</label>
            <input type="password" id="mdp" name="mdpModif" required placeholder="************" >
        </div>
        <div class="form-group">
            <label for="mdpConfirmDeModif">Confirmez le nouveau mot de passe:</label>
            <input type="password" id="mdpConfirm" name="mdpConfirmModif" required placeholder="************">
        </div>
        <div class="form-group">
            <label for="mdpModif">Entrez votre mot de passe actuel :</label>
            <input type="password" id="reelMdp" name="reelmdpModif" required placeholder="************">
        </div>
        <div class="form-group">
            <label for="ppModif">Nouvelle photo de profil :</label>
            <input type="file" id="ppModif" name="ppModif" accept="image/*">
        </div>
        <button class="enregistreButton" type="submit">Enregistrer</button>
        <div class="form-footer">
            Vous avez un problème ? <a href="index.php?module=mod_faq">FAQ</a>
        </div>
    </form>
    <form style="background-color: white;" action="index.php?module=mod_profil&&action=suppression" method="POST">
    <button class ="suppButton" type="submit">Supprimer le compte</button>
    </form>
</div>
<script>

</script>
<style>

    #formProfil {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: auto;
    }
    #formProfil h2 {
        text-align: center;
        margin-bottom: 20px;
        font-family: Roboto, sans-serif;
    }
    #formProfil .form-group {
        margin-bottom: 15px;
    }
    #formProfil .form-group label {
        display: block;
        margin-bottom: 5px;
        font-family: Roboto, sans-serif;
    }
    #formProfil .form-group input[type="text"],
    #formProfil .form-group input[type="email"],
    #formProfil .form-group input[type="password"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        outline: none;
    }
    #formProfil .form-group2 input[type="checkbox"] {
        margin-right: 10px;
    }
    #formProfil .form-group2 {
        display: flex;
        font-family: Roboto, sans-serif;
    }
    #formProfil button.enregistreButton {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        outline: none;
    }

    button.suppButton {
        display: block;
        margin: auto; /* Correction ici */
        background-color: red;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        max-width: 400px;
        min-width: 400px;
        margin-top: 10px;
        outline: none;
    }


    #formProfil button.enregistreButton:hover {
        background-color: #0056b3;
    }

    button.suppButton:hover {
        background-color: darkred;
    }

    .container .form-footer {

        font-family: Roboto, sans-serif;
        margin-top: 20px;
    }
    .container .form-footer a {

        color: #007bff;
        text-decoration: none;
    }
    .container .form-footer a:hover {

        text-decoration: underline;
    }
    #formProfil .form-group input[type="file"]{
        display: inline-block;
        padding: 8px 12px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border: 1px solid #007bff;
        border-radius: 4px;
        color: #007bff;
        background-color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }
</style>
<?php


class VueConnexion extends VueGenerique{


    public function __construct() {
       
    }

    public function fromIns(){
        ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="index.php?module=mod_connexion&action=loginUser" method="post">
                <h1 class="text-center">Connexion</h1>
                <div class="form-container">
                    <fieldset>
                        <legend>Identifiants</legend>
                        <ul>
                            <li>
                                <label for="loginConx">Login:</label>
                                <input type="text" id="loginConx" name="loginConx" class="form-control" required />
                            </li>
                            <li>
                                <label for="mdpConx">Password:</label>
                                <input type="password" id="mdpConx" name="mdpConx" class="form-control" required />
                            </li>
                        </ul>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    <p class="text-center mt-3">Pas encore inscrit? <a href="index.php?module=mod_connexion&action=addUser">S'inscrire</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    
    }
    
public function fromConnex(){
   /* ?>

    <main>
        <div class="form-container">
            <form action="index.php?module=mod_connexion&action=loginUser" method="post">
                <h1>Connexion</h1>
                <fieldset>
                    <legend>Identifiants</legend>
                    <ul>
                        <li>
                            <label for="loginConx">Login:</label>
                            <input type="text" id="loginConx" name="loginConx" required />
                        </li>
                        <li>
                            <label for="mdpConx">Password:</label>
                            <input type="password" id="mdpConx" name="mdpConx" required />
                        </li>
                    </ul>
                </fieldset>
                <input type="submit" value="Connexion">
                <p class="signup-link">Pas encore inscrit? <a href="index.php?module=mod_connexion&action=addUser">S'inscrire</a></p>
            </form>
        </div>
    </main>

    <?php */
}

    
    public function messageConnex(){

        echo "Vous êtes déjà connecté sous l’identifiant \n".$_POST['loginConx'];
        ?>

<a href="index.php?module=mod_connexion&action=deco">Deconnexion</a>

<?php 
    }

    

    
}
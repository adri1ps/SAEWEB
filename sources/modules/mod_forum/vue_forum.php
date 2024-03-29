<?php

include_once 'vue_generique.php';

class VueForum extends VueGenerique {

    public function __construct() {

    }

    public function affiche_liste_msg($tab)
    {
        ?>
        <div class="container containerPageForum">
            <h1 class="h1Forum text-center mb-4">Forum</h1>
            <div class="row">
                <div class="col-md-8">
                    <ol class="list-group">
                        <?php foreach ($tab as $values): ?>
                            <li class="list-group-item mb-4 shadow-lg p-3 mb-5 bg-white rounded">
                                <h3 id="topic"><?php echo $values['topic'] ?></h3>
                                <p class="pForum">
                                    Publié le <?php echo $values['date']." par "; ?>
                                    <span id="nomJoueur"><?php echo $values['nom'] ?></span>
                                </p>
                                <p class="pForum">
                                    Contenu :<span id="contenu"> <?php echo  $values['contenu'] ?></span>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>

                <div class="col-md-4">
                    <?php $this->form_ajoutMsg();?>
                </div>
            </div>
        </div>
        <?php
    }


    public function form_ajoutMsg(){
        ?>
        <div>
            <h2>Nouveau Message</h2>
            <form action="index.php?module=mod_forum&action=poster" method="post">
                <div class="form-group">
                    <label for="topic">Sujet (Topic):</label>
                    <input type="text" id="topic" name="topic" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="msg" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Poster</button>
            </form>
        </div>
        <?php
    }


    public function messageInsertionReussit(){

        echo"Message Posté";
    }

    public function messageInsertionInvalide(){

        echo"Insertion Invalide";
    }
}
?>

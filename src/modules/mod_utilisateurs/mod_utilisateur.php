
<?php

include_once 'modules/mod_joueurs/vue_joueurs.php';
include_once 'modules/mod_joueurs/cont_joueurs.php';

class ModJoueurs  {

    private $action,$cont,$vue;

    public function __construct() {

       $this->cont = new ContJoueurs();
       $this->vue  = new VueJoueurs();
       $this->action = isset($_GET['action']) ? $_GET['action'] : "bienvenue"; 

       $this->vue->lien();

        switch($this->action) {
            case "bienvenue":
                $this->vue->afficheBievenue();
            break;
            case "liste":
                $this->cont->liste();
            break;
            case "details":
                $this->cont->details();
            break;
            case "ajout":
                $this->cont->afficheForm();
            break;
            case "form":
                $this->cont->addJoueur();
            break;

        }
    }    
}    



?>
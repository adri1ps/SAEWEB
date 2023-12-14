<?php

include_once 'modules/mod_connexion/cont_connexion.php';
include_once 'modules/mod_connexion/vue_connexion.php';
class ModConnexion
{


    private $action, $cont, $vue;

    public function __construct()
    {

        $this->cont = new ContConnexion();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "default";
        $this->vue = new VueConnexion();


        switch ($this->action) {
            case "addUser":
                $this->vue->fromIns();
                $this->cont->addUser();
                break;
            case "loginUser":
                $this->cont->connexion();
                break;
            case "deco":
                $this->cont->deconnexion();
                break;
            default;
                 $this->vue->fromConnex();
                break;
        }
    }

}







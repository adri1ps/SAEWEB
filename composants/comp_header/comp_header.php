<?php

class CompHeader {
    private $header;

    public function __construct() {

        if (isset($_SESSION['user'])) {

            include_once 'headerConnecté.html';
        }
        else {

            include_once 'headerDéconnecté.html';
        }
    }

    public function afficheHeader() {

        echo $this -> header;
    }
}


?>
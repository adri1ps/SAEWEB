<?php

class CompHeader {
    private $header;

    public function __construct() {

        if (isset($_SESSION['user'])) {

            include_once 'headerCo.html';
        }
        else {

            include_once 'headerDeco.html';
        }
    }

    public function afficheHeader() {

        echo $this -> header;
    }
}
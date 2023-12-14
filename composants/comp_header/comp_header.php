<?php


class CompHeader {
    private $header;

    public function __construct() {


        include_once 'header.html';
    }

    public function afficheHeader() {
        
        echo $this -> header;
    }
}


?>
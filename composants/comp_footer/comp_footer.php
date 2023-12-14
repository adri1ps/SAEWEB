<?php


class CompFooter {
    private $footer;

    public function __construct() {


        include_once 'footer.html';
    }

    public function afficheFooter() {
        
        echo $this -> footer;
    }
}


?>
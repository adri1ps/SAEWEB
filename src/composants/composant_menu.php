<?php
class CompMenu{
    private $menuContent;

    public function __construct() {
       
        $this->menuContent = "";
    }

    public function affiche() {
        echo $this->menuContent;
    }
}
?>
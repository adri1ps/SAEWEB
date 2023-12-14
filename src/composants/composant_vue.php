<?php
class CompMenuVue {
    private $menuItems;

    public function __construct($menuItems) {
        $this->menuItems = $menuItems;
    }

    public function affiche() {
        $menuHTML = '<ul>';
        foreach ($this->menuItems as $item) {
            switch($item){
                case 'MonCompte':
                    $menuHTML .= '<li><a href="index.php?module=mod_connexion">' . $item . '</a></li>';
                    break;
                case 'Joueurs':    
                    $menuHTML .= '<li><a href="index.php?module=mod_equipes">' . $item . '</a></li>';            
                    break;
            }
            
        }
        $menuHTML .= '</ul>';
        return $menuHTML;
    }
}
?>

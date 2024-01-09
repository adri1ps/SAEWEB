<?php

    if (isset($_SERVER['HTTP_REFERER'])) {
        $urlPrecedente = $_SERVER['HTTP_REFERER'];
    }
    else {

        $urlPrecedente = "index.php?module=mod_accueil";
        }
?>


<a href="<?php echo htmlspecialchars($urlPrecedente); ?>" class="btn" style="color: white; z-index: 1500; background-color: #031633;">
    <i class="bi bi-arrow-left" style="color: white;"></i> Retour
</a>
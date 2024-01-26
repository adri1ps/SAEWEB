<?php

if (isset($_SERVER['HTTP_REFERER'])) {
    $urlPrecedente = $_SERVER['HTTP_REFERER'];
} else {
    $urlPrecedente = "index.php?module=mod_accueil";
}
?>

<a href="#" id="scrollToTopBtn" class="btn" style="color: white; z-index: 1500; background-color: #031633;">
    <i class="bi bi-arrow-up" style="color: white;"></i> Haut
</a>

<script>

    document.getElementById('scrollToTopBtn').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

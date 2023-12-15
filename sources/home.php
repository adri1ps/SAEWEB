<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bonjour2.css">
    <title>Home Page</title>
</head>
<body>

  <?php 

    $header = New CompHeader();
    $header -> afficheHeader();

    $titre = New CompTitre();
    $titre -> afficheTitre();

    $barre = New CompBarreRecherche();
    $barre -> afficheBarre();?>

    <div class="contenuPrincipal">
      <?php echo $tampon; ?>
    </div>
    
  <?php  

    $footer = New CompFooter();
    $footer -> afficheFooter(); 

  ?>
  
  
</body>
</html>
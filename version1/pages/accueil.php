<?php
include_once("../inc/fonction.php");
$etu=$_SESSION['etu'];
$produit=get_produit_membre($etu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/bootstrap/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="contrainer">
        <a href="" class="navbar-brand" href="#">Produit de membre</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="accueil.php" class="nav-link">Acceuil</a></li>
            <li class="nav-item"><a href="vendre.php" class="nav-link">Vendre</a></li>
            <li class="nav-item"><a href="mes_ventes" class="nav-link">Mes Ventes</a></li>

        </ul>
    </div>
    
</nav>



    <!-- <div class="topbar-user"> -->
        <!-- <div class="topbar-avatar">U</div> -->
        <!-- <?= $_SESSION['etu'] ?> -->
      <!-- </div> -->
    
<?php foreach ($produit as $pro) { ?>
    <ul>
    <li><h1><?= $pro["nom_produit"] ?> </h1>
    <p><?= $pro["prix_vente"]?></p>
<button>Acheter</button>
<?= $pro["quantite_dispo"]?></li>
    </ul>
<?php }?>
    
</body>
</html>
<?php
include_once '../inc/fonction.php';

$result= produit_accueil();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/bootstrap/font/bootstrap-icons.css">
    <title>Home</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed">
    <div class="contrainer">
        <a href="" class="navbar-brand" href="#">Produit de membre</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="accueil.php" class="nav-link">Acceuil</a></li>
            <li class="nav-item"><a href="vendre.php" class="nav-link">Vendre</a></li>
            <li class="nav-item"><a href="mesventes.php" class="nav-link">Mes Ventes</a></li>
        </ul>
        <br>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <div class="topbar-user">
        
                  <div class="topbar-avatar"><img src="../asset/image/<?php echo $_SESSION['img'] ?>" alt="essai" width="30" height="30" ></div>
                    <?php echo $_SESSION["username"] ?>
        
                 </div>
      
                </li>
            </ul>    
    </div>
    
</nav>
</header>    

<main>
<div class="row">
<?php 
$e=1;
$u=1;
$o=1;
$i=1;   
foreach($result as $def){
?>
<div class="col-md-3 col-sm-4 bg-light" >
<?php
if( $def['id_categorie'] == 1){
?>
    <img src="../image/plat<?php echo $e; ?>.jpeg" alt="plat">
<?php
    $e++;

}
    
if( $def['id_categorie'] == 2){
?>
    <img src="../image/boisson<?php echo $u; ?>.jpeg" alt="plat">
<?php
    $u++;
}
    
if( $def['id_categorie'] == 3){
?>
    <img src="../image/snack<?php echo $o; ?>.jpeg" alt="plat">
<?php
    $o++;
}
    
if( $def['id_categorie'] == 4){
?>
    <img src="../image/dessert<?php echo $e; ?>.jpeg" alt="plat">
<?php
    $i++;
}
?>
    <p><?php echo $def['name_prod'] ?></p>
    <form action="vente.php" method="get">
        <input type="submit" value="Acheter">
        <input type="number" name="qte" id="<?php echo $def['quantite_dispo'] ?>">
    </form>
    <p><?php echo $def['prix_reference'] ?> Ar</p>
<hr>
</div>
<?php

}    
?>
</div>
</main>


</body>
</html>











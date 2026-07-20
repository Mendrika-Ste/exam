<?php
include_once '../inc/fonction.php';
session_start();

$p_tot= mesventes($_SESSION['user_id']); 
$produit = ventes($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Total : <?php echo $p_tot['price'] ?></h1>

<h3>Produit : </h3>
<ul>
    <?php foreach($produit as $pro){ ?>
    <li><?= $pro['name_prod'] ?></li>
    <?php } ?>
</ul>

</body>
</html>




























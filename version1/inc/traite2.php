<?php

include_once 'fonction.php';
$a=$_GET['etu'];
$b=$_GET['nom'];
$c=$_GET['image_profil'];
if(!empty($c)){
    $c = 'version1/image/incon.jpeg';
}
add_olona($a,$b,$c);
session_start();
        $_SESSION['user_id'] = $a;
        $_SESSION['username'] = $b;
        $_SESSION['img'] = $c;

   header('Location: accueil.php');
        exit();     

?>
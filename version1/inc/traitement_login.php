<?php

include_once 'fonction.php';
if (!empty($_GET['etu'])) {
    $etu = $_GET['etu'];

    $user = checkLogin($etu);
    if ($user) {
  
        session_start();
        $_SESSION['user_id'] = $user['id_membre'];
        $_SESSION['username'] = $user['nom'];
        $_SESSION['img'] = $user['image_profil'];
        header('Location: ../pages/accueil.php');
        exit();
    } else {
        // Connexion échouée, afficher un message d'erreur
        header('Location: ../pages/nom_log.php');
        exit();
    }
}
else {
    // Afficher un message d'erreur si les champs ne sont pas remplis
   header('Location: ../pages/login.php?error=2');
   exit();
}


?>
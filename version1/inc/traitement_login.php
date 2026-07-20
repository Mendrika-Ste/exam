<?php

include_once 'inc/functions.php';
if (!empty($_POST['etu'])) {
    $etu = $_POST['etu'];

    $user = checkLogin($etu);
    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id_membre'];
        $_SESSION['username'] = $user['nom'];

        header('Location: home.php');
        exit();
    } else {
        // Connexion échouée, afficher un message d'erreur
        header('Location: index.php?error=1');
        exit();
    }
}
else {
    // Afficher un message d'erreur si les champs ne sont pas remplis
   header('Location: index.php?error=2');
   exit();
}


?>
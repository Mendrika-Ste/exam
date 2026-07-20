<?php
if (isset($_GET['error'])) {
   if ($_GET['error'] == 1) {
        $error_message = "Veuillez remplir tous le champ.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (isset($error_message)) { ?>
      <div class="auth-error">
        <?php echo htmlspecialchars($error_message); ?>
      </div>
    <?php } ?>

    <form action="../inc/traitement_login.php" method="get" enctype="multipart/form-data">
    <input type="number" name="etu" value="4690" >
    <input type="submit" value="Valider">
    </form>


</body>
</html>
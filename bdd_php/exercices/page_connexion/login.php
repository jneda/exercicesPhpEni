<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <form action="verif_login.php" method="POST">
    <h1>Veuillez saisir identifiant et mot de passe</h1>
    <div class="form-container">
      <div class="form-input">
        <label for="identifiant">Identifiant :</label>
        <input type="text" id="identifiant" name="identifiant" maxlength="20" required="required">
      </div>
      <div class="form-input">
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" maxlength="20" required="required">
      </div>
      <div class="form-input">
        <input type="submit" value="Se connecter">
      </div>
    </div>
  </form>
  <?php
  if (
    isset($_SESSION["authentification"])
    && !$_SESSION["authentification"]
  ) {
    echo '<p class="error-message">Identifiant ou mot de passe incorrect.</p>';
  }
  ?>
</body>

</html>
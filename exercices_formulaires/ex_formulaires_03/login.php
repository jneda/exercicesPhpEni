<!-- Reprendre l'exercice 1 et afficher dans la page login.php le nombre de
fois où l'utilisateur a essayé de se loguer avant d'utiliser les bons login et
mot de passe. Afficher aussi dans cette page tous les logins et mots de passe
essayés. -->

<?php

session_start();
if (isset($_SESSION["nbEssais"])) {
  $_SESSION["nbEssais"] += 1;
} else {
  $_SESSION["nbEssais"] = 0;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    :root,
    :root::before,
    :root::after {
      box-sizing: border-box;
    }

    form {
      width: 80%;
      max-width: 20rem;
      margin: 0 auto;
      margin-top: 2rem;
      padding: 1rem;
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 0.4rem;
    }

    form label {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    form label input {
      width: 60%;
    }

    form input[type="submit"] {
      width: 50%;
      margin: 0 auto;
      padding: 0.2rem;
    }

    form p {
      text-align: center;
      margin: 0;
    }

    form p.error {
      color: red;
    }
  </style>
</head>

<body>
  <form action="verif_login.php" method="POST">
    <label for="nom">Nom :<input type="text" name="nom" id="nom"></label>
    <label for="mdp">Mot de passe :<input type="password" name="mdp" id="mdp"></label>
    <input type="submit" value="Vérifier">
    <?php
    if (isset($_GET["login_error"]) and $_GET["login_error"]) {
      echo '<p class="error">Login incorrect</p>';
      echo '<p>Nombre de tentatives : ' . $_SESSION["nbEssais"] . '</p>';
      echo '<ol>';
      foreach ($_SESSION["saisies"] as $saisie) {
        echo '<li>Nom : ' . $saisie["nom"] . " - mot de passe : "
          . $saisie["mdp"] . '</li>';
      }
      echo '</ol>';
    }
    ?>
  </form>
</body>

</html>
<?php

session_start();

// initialisation de l'authentification

if (!isset($_SESSION["authentification"])) {
  $_SESSION["authentification"] = false;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentification</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <?php

  // validation des données du formulaire

  if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe"])) {
    extract($_POST);
  }

  // connexion à la bdd

  try
  {
    $bdd = new PDO("mysql:host=localhost; dbname=bd_login", "root", "");
    // activation des exceptions
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // test
    // echo "Connexion à la base de données établie.<br>";

    // préparation de la requête
    $sql = "SELECT id FROM utilisateur WHERE identifiant = ? AND mot_de_passe = ?";
    $resultat = $bdd->prepare($sql);

    // exécution
    $ok = $resultat->execute([$identifiant, $mot_de_passe]);
    $donnees = $resultat->fetch();

    if ($ok && $donnees) {
      $_SESSION["authentification"] = true;

      echo "<p>Utilisateur authentifié.<p>";
    } else {
      $_SESSION["authentification"] = false;

      // redirection vers login.php
      header("Location:login.php");
    }

    // libération du curseur
    $resultat->closeCursor();
  }
  catch (Exception $e)
  {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
  }
  finally
  {
    $bdd = null; // fermeture de la connexion
  }

  ?>

</body>

</html>
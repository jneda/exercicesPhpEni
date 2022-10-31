<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vérification</title>
  <style>
    :root,
    :root::before,
    :root::after {
      box-sizing: border-box;
    }

    pre {
      white-space: normal;
    }
  </style>
</head>
<body>
  
</body>
</html>
    
<?php

// var_dump($_POST);

if (isset($_POST["nom"]) and isset($_POST["mdp"])) {
  extract($_POST);
  if ($nom === "Dupont" and $mdp === "alibaba") {
    echo "<p>Login correct.</p>";
  } else {
    header("Location:login.php?login_error=true");
  }
} else {
  echo "<p>Erreur : les données n'ont pas été transmises.</p>";
}
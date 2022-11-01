<?php

// connexion à la bdd
$base = mysqli_connect("localhost", "root", "", "bd_personnes_php");

if (!$base) {
  echo "Échec de la connexion à la base de données.<br>";
} else {
  echo "Connexion réussie.<br>";
  echo "Informations sur le serveur : " . mysqli_get_host_info($base) . "<br>";

  // requête SQL à préparer
  $sql = "SELECT nom, prenom FROM personne WHERE age > ?";

  // préparation
  $requete = mysqli_prepare($base, $sql);

  // liaison des paramètres
  $ok = mysqli_stmt_bind_param($requete, "i", $age);

  // affectation d'une valeur à la variable
  $age = 35;

  // exécution de la requête
  $ok = mysqli_stmt_execute($requete);

  if (!$ok) {
    echo "Échec de l'exécution de la requête.<br>";
  } else {
    // association des variables de résultat
    $ok = mysqli_stmt_bind_result($requete, $nom, $prenom);

    // affichage des résultats
    echo "Nom et prénom des personnes ayant un age supérieur à $age :<br>";
    while (mysqli_stmt_fetch($requete)) {
      echo "$nom, $prenom<br>";
    }
    // destruction du statement
    mysqli_stmt_close($requete);
  }

  // fermeture de la connexion
  if (mysqli_close($base)) {
    echo "Déconnexion réussie.<br>";
  } else {
    echo "Échec de la déconnexion.<br>";
  }
}
<?php

$base = mysqli_connect("localhost", "root", "", "bd_personnes_php");

if (!$base) {
  echo "Échec de la connexino à la base de données.<br>";
} else {
  echo "Connexion réussie.<br>Informations sur le serveur : "
    . mysqli_get_host_info($base) . "<br>";

  // requête SQL de mise à jour
  $sql = "UPDATE personne SET nom = 'DUCHEMIN' WHERE nom = 'DURAND'";

  //exécution
  $resultat = mysqli_query($base, $sql);

  if (!$resultat) {
    echo "Échec de l'exécution de la requête.<br>";
  } else {
    echo "Nombre de personnes modifiées : " . mysqli_affected_rows($base)
      . "<br>";
  }

  // fermeture de la connexion
  if (mysqli_close($base)) {
    echo "Déconnexion réussie.<br>";
  } else {
    echo "Échec de la déconnexion.<br>";
  }
}
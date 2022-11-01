<?php

$base = mysqli_connect("localhost", "root", "", "bd_personnes_php");

if (!$base) {
  echo "Échec de la connexion avec la base de données.<br>";
} else {
  echo "Connexion réussie.<br>";
  echo "Informations sur le serveur : " . mysqli_get_host_info($base) . "<br>";

  // requête SQL de suppression
  $sql = "DELETE FROM personne WHERE nom = 'MENFIN'";

  // exécution
  $resultat = mysqli_query($base, $sql);

  if (!$resultat) {
    echo "Échec de l'exécution de la requête.<br>";
  } else {
    echo "Nombre de personnes supprimées : " . mysqli_affected_rows($base)
      . "<br>";
  }

  // déconnexion
  if (mysqli_close($base)) {
    echo "Déconnexion réussie.<br>";
  } else {
    echo "Échec de la déconnexion.<br>";
  }
}
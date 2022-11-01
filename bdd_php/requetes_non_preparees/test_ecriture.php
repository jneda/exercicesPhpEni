<?php

// connexion à la bdd

$base = mysqli_connect("localhost", "root", "", "bd_personnes_php");

if (!$base) {
  echo "Échec de la connexion à la base de données.<br>";
} else {
  echo "Connexion réussie.<br>";
  echo "Informations sur le serveur : " . mysqli_get_host_info($base) . "<br>";

  // requête sql
  $sql = "INSERT INTO personne (nom, prenom) "
    . "VALUES ('MENFIN', 'Albert')";
  
  // exécution de la requête
  $resultat = mysqli_query($base, $sql);

  if (!$resultat) {
    echo "Échec de l'exécution de la requête.<br>";
    printf("Erreur %d : %s<br>", mysqli_errno($base), mysqli_error($base));
  } else {
    echo "Personne enregistrée.<br>";
    // récupération du dernier id auto-incrémental
    $id = mysqli_insert_id($base);
    echo "Son identifiant est $id.<br>";
  }

  if (mysqli_close($base)) {
    echo "Déconnexion réussie.<br>";
  } else {
    echo "Échec de la déconnexion.<br>";
  }
}
<?php

// connexion à la bdd
$base = mysqli_connect("localhost", "root", "", "bd_personnes_php");

if (!$base) {
  echo "Échec de la connexion à la base de données.<br>";
} else {
  echo "Connexion réussie.<br>";
  echo "Informations sur le serveur : " . mysqli_get_host_info($base) . "<br>";

  // requête SQL à préparer
  $sql = "INSERT INTO personne (id_personne, nom, prenom, age) VALUES (?, ?, ?, ?)";

  // préparation
  $requete = mysqli_prepare($base, $sql);

  // liaison des paramètres
  $ok = mysqli_stmt_bind_param($requete, "issi", $id, $nom, $prenom, $age);

  // affectation de valeurs aux variables
  $id = 1; // ajout d'un identifiant déjà existant
  $nom = "MARTEAUPIQUEUR";
  $prenom = "Monique";
  $age = 63;

  // exécution de la requête
  $ok = mysqli_stmt_execute($requete);

  if (!$ok) {
    echo "Échec de l'exécution de la requête.<br>";
    echo "Erreur " . mysqli_stmt_errno($requete) . " - "
      . mysqli_stmt_error($requete) . "<br>";
  } else {
    // affichage du résultat
    echo "Nombre de personnes ajoutées : " . mysqli_affected_rows($base)
      . "<br>";
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
<?php

// connexion à la base de données via mysqli_connect()

$base = mysqli_connect("127.0.0.1", "root", "", "bd_personnes_php");

// gestion d'erreur lors de la connexion

if ($base) {
  echo "Connexion réussie.<br>";
  echo "Informations sur le serveur : " . mysqli_get_host_info($base) . "<br>";
} else {
  printf("Erreur %d : %s.<br>", mysqli_connect_errno(), mysqli_connect_error());
}

// requête non préparée via mysqli_query()

$resultat = mysqli_query($base, "SELECT * FROM personne");

// gestion d'erreur lors de la requête

if (!$resultat) {
  echo "Échec de l'exécution de la requête.<br>";
} else {
  echo "<hr>";

  // affichage du nombre de lignes via mysqli_num_rows()
  echo "Nombre de personnes : " . mysqli_num_rows($resultat) . "<br>";

  echo "<hr>";

  // fetch sur chaque ligne de la requête avec myqsli_fetch_assoc()
  while ($ligne = mysqli_fetch_assoc($resultat)) {
    // affichage des données
    echo "Nom : " . $ligne['nom'] . " et prénom : " . $ligne['prenom'] . "<br>";
  }

  echo "<hr>";
}

// il faut renouveler la requête car le précédent fetch l'a épuisée
$resultat = mysqli_query($base, "SELECT nom, prenom FROM personne");

if (!$resultat) {
  echo "Échec de l'exécution de la requête.<br>";
} else {

  // fetch avec mysqli_fetch_row()
  while ($ligne = mysqli_fetch_row($resultat)) {
    echo "Nom : " . $ligne[0] . " et prénom : " . $ligne[1] . "<br>";
  }

  echo "<hr>";
}

// jamais deux sans trois
$resultat = mysqli_query($base, "SELECT nom, prenom FROM personne");

if (!$resultat) {
  echo "Échec de l'exécution de la requête.<br>";
} else {

  // fetch avec mysqli_fetch_object()
  while ($personne = mysqli_fetch_object($resultat)) {
    echo "Nom : " . $personne->nom . " et prénom : " . $personne->prenom . "<br>";
  }

  echo "<hr>";
}

// gestion d'erreur lors de la déconnexion

if (mysqli_close($base)) {
  echo "Déconnexion réussie.<br>";
} else {
  echo "Échec de la déconnexion.";
}

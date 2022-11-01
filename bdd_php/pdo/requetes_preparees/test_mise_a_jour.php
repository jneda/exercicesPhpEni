<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE personne SET age = :age WHERE nom = :nom AND prenom = :prenom";

  // preparation de la requête avec les marqueurs
  $resultat = $base->prepare($sql);

  // execute prend en paramètre un array contenant les valeurs dans l'ordre
  $resultat->execute([
    "age" => 50,
    "nom" => "DUPONT",
    "prenom" => "Jean"
  ]);

  // affichage du résultat
  echo "Personne modifiée.<br>";

  // fermeture du curseur de la requête
  $resultat->closeCursor();
}
catch (Exception $e) {
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null;
}
<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO personne (nom, prenom, age) VALUES (:nom, :prenom, :age)";

  // preparation de la requête avec les marqueurs
  $resultat = $base->prepare($sql);

  // execute prend en paramètre un array contenant les valeurs dans l'ordre
  $resultat->execute([
    "nom" => "ROLIN",
    "prenom" => "Claire",
    "age" => 42
  ]);

  // affichage du résultat
  echo "L'identifiant de la dernière personne ajoutée est : "
    . $base->lastInsertId() . "<br>";

  // fermeture du curseur de la requête
  $resultat->closeCursor();
}
catch (Exception $e) {
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null;
}
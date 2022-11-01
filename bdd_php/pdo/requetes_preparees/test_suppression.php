<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM personne WHERE nom = :nom";

  // preparation de la requête avec les marqueurs
  $resultat = $base->prepare($sql);

  // execute prend en paramètre un array contenant les valeurs dans l'ordre
  $resultat->execute(["nom" => "MARTIN"]);

  // affichage du résultat
  echo "Personne supprimée.<br>";

  // fermeture du curseur de la requête
  $resultat->closeCursor();
}
catch (Exception $e) {
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null;
}
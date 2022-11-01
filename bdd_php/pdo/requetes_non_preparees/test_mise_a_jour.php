<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connexion ok.<br>";

  // mise à jour de données grâce à exec()
  $sql = "UPDATE personne SET nom = 'DUPUIS', age = 33 WHERE nom = 'DURAND'";
  $nombreMaj = $base->exec($sql);

  echo "Nombre de personnes modifiées : " . $nombreMaj . "<br>";
}
catch (Exception $e) {
  // message en cas d'erreur
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null; // fermeture de la connexion
}

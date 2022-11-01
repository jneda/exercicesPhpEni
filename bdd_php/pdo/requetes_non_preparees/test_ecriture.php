<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connexion ok.<br>";

  // insertion de données grâce à exec()
  $sql = "INSERT INTO personne (nom, prenom, age) VALUES ('DURAND', 'Olivier', 36)";
  $base->exec($sql);

  echo "L'identifiant de la dernière personne ajoutée est : "
    . $base->lastInsertId() . "<br>";
} catch (Exception $e) {
  // message en cas d'erreur
  die("Erreur : " . $e->getMessage() . "<br>");
} finally {
  $base = null; // fermeture de la connexion
}

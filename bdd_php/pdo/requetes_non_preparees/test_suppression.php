<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connexion ok.<br>";

  // suppression de données grâce à exec()
  $sql = "DELETE FROM personne WHERE nom = 'VERSE'";
  $base->exec($sql);

  echo "Personne supprimée.<br>";
} catch (Exception $e) {
  // message en cas d'erreur
  die("Erreur : " . $e->getMessage() . "<br>");
} finally {
  $base = null; // fermeture de la connexion
}

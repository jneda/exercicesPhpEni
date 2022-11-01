<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // appel de la procédure avec le mot-clé CALL
  $stmt = $base->prepare("CALL creation_personne(?, ?, ?)");

  $nom = "DEVERS";
  $prenom = "Gilles";
  $age = 40;

  // liaison des paramètres
  $stmt->bindParam(1, $nom, PDO::PARAM_STR, 20);
  $stmt->bindParam(2, $prenom, PDO::PARAM_STR, 20);
  $stmt->bindParam(3, $age, PDO::PARAM_INT);

  // exécution de la procédure stockée
  $stmt->execute();
  echo "La procédure a inséré une nouvelle personne.<br>";
}
catch (Exception $e) {
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null;
}
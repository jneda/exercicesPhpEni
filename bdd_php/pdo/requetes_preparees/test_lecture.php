<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT nom, prenom FROM personne WHERE age > ? AND nom LIKE ?";

  // preparation de la requête avec les marqueurs
  $resultat = $base->prepare($sql);

  // execute prend en paramètre un array contenant les valeurs dans l'ordre
  $resultat->execute([35, 'DU%']);

  // affichage des résultats via fetch()
  while ($personne = $resultat->fetch()) {
    echo "Nom : " . $personne["nom"] . " Prénom : " . $personne["prenom"]
      . "<br>";
  }

  // fermeture du curseur de la requête
  $resultat->closeCursor();

  // on peut nommer les marqueurs
  $sql = "SELECT nom, prenom FROM personne WHERE age > :age AND nom LIKE :nom";

  $resultat = $base->prepare($sql);
  $resultat->execute(["age" => 35, "nom" => "DU%"]);

  while ($personne = $resultat->fetch()) {
    echo "Nom : " . $personne["nom"] . " Prénom : " . $personne["prenom"]
      . "<br>";
  }

  $resultat->closeCursor();
}
catch (Exception $e) {
  die("Erreur : " . $e->getMessage() . "<br>");
}
finally {
  $base = null;
}
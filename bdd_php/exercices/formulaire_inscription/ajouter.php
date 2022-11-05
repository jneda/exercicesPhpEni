<?php

include "connexion.php";

extract($_POST);

// vérification de l'existence de l'email dans la BDD
$sql = "SELECT id FROM stagiaire WHERE email = :email";
$requete = $bdd->prepare($sql);
$requete->execute(["email" => $email]);

$resultat = $requete->fetch();
if ($resultat && $resultat["id"]) {
  header("Location:accueil.php?error=1");
} else {
  // enregistrement des données dans la BDD
  $sql = "INSERT INTO stagiaire (nom, prenom, intitule, debut, fin, email) VALUES "
    . "(:nom, :prenom, :intitule, :debut, :fin, :email)";
  $requete = $bdd->prepare($sql);
  $requete->execute([
    "nom" => $nom,
    "prenom" => $prenom,
    "intitule" => $intitule,
    "debut" => $debut,
    "fin" => $fin,
    "email" => $email
  ]);

  echo "<p>Nombre de stagiaires ajoutés : " . $requete->rowCount() . "</p>";
}

$requete->closeCursor();
$bdd = null;

<?php

try {
  $base = new PDO("mysql:host=localhost; dbname=bd_personnes_php", "root", "");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connexion ok.<br>";

  // récupération des données de la table personne
  $resultat = $base->query("SELECT * FROM personne");

  echo "Nombre de personnes : " . $resultat->rowCount() . "<br>";

  // affichage des résultats un par un grâce à fetch()
  while ($personne = $resultat->fetch()) {
    // var_dump($personne); // type array
?>

    <p>
      Nom : <?php echo $personne['nom']; ?>,
      Prénom : <?php echo $personne['prenom']; ?>
    </p>

<?php
  }

  // fermeture de la requête
  $resultat->closeCursor();
} catch (Exception $e) {
  // message en cas d'erreur
  die("Erreur : " . $e->getMessage() . "<br>");
} finally {
  $base = null; // fermeture de la connexion
}

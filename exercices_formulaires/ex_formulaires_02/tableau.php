<!-- Créer une page tableau.php contenant un formulaire avec une liste à
sélection simple contenant des pays et en-dessous une zone de type <div>
affichant les villes suivant le pays sélectionné. Le formulaire contient
un bouton de type "submit" permettant de rappeler la page elle-même
suivant le pays sélectionné. L'objectif est de réaliser cette page
sans utiliser de JavaScript. Lorsque vous affichez la page pour la
première fois, il faut afficher le premier pays de la liste avec les
villes correspondantes. -->

<?php

$pays = ["France", "Italie", "Allemagne", "Russie"];

$villes = [
  "France" => ["Paris", "Lyon", "Marseille"],
  "Italie" => ["Rome", "Milan", "Naples"],
  "Allemagne" => ["Berlin", "Munich", "Francfort"],
  "Russie" => ["Moscou", "Saint-Pétersbourg", "Nizhny-Novgorod"]
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pays et villes</title>
</head>

<body>
  <form action="tableau.php" method="POST">
    <select name="pays">
      <?php
      /* afin que le pays choisi s'affiche comme étant l'option sélectionnée
        il est nécessaire de régénérer le HTML en fonction du choix de
        l'utilisateur */

      if (!isset($_POST["pays"])) {
        $choixPays = "France";
      } else {
        $choixPays = $_POST["pays"];
      }

      foreach ($pays as $option) {
        if ($option === $choixPays) {
          echo '<option selected="selected">';
        } else {
          echo '<option>';
        }
        echo $option . '</option>';
      }
      ?>
    </select>
    <input type="submit" value="Afficher les villes">
  </form>
  <div>
    <ul>
      <?php
      foreach ($villes[$choixPays] as $ville) {
        echo "<li>$ville</li>";
      }
      ?>
    </ul>
  </div>
</body>

</html>
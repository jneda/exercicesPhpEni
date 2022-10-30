<!-- Dans la section tableau à plusieurs dimensions, vous avez vu le code pour
créer un tableau multidimensionnel en mémoire. Créer le code PHP permettant de
générer ce tableau en HTML à l'aide des boucles. -->

<?php

$tableau_personne["DUPONT"] = array(
  "prenom" => "PAUL",
  "profession" => "ministre",
  "age" => 50
);

$tableau_personne["DURAND"] = array(
  "prenom" => "ROBERT",
  "profession" => "agriculteur",
  "age" => 45
);

include "table_head.html";

?>

<body>
  <table>
    <thead>
      <tr>
        <th>Clé</th>
        <th colspan="2">Valeur</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($tableau_personne as $nom => $donnees) {
        echo '<tr>';
        echo '<th rowspan="4">' . $nom . '</th>';
        echo '<th>Clé</th>';
        echo '<th>Valeur</th>';
        echo '</tr>';

        foreach ($donnees as $cle => $valeur) {
          echo '<tr>';
          echo '<td>' . $cle . '</td>';
          echo '<td>' . $valeur . '</td>';
          echo '</tr>';
        }
      }
      ?>
    </tbody>
  </table>
</body>

</html>
<!-- Soit le tableau A avec les éléments 3, 8, 15 et 16.
Créer un tableau B à l'aide d'une boucle contenant tous les nombres de 1 à 20
sauf les éléments du tableau A.
Créer une fonction qui calcule le cube d'un nombre puis afficher dans un tableau
HTML les éléments du tabeau B dans la première colonne  et le cube des éléments
de B dans la seconde colonne. -->

<?php

function calculerCube($n)
{
  return pow($n, 3);
}

$tabA = [3, 8, 15, 16];
$tabB = [];

for ($i = 1; $i <= 20; $i++) {
  if (!in_array($i, $tabA)) {
    $tabB[] = $i;
  }
}

include "table_head.html";

?>

<body>
  <table>
    <thead>
      <tr>
        <th>Valeurs de B</th>
        <th>Valeurs de B au cube</th>
      </tr>
    </thead>
    <tbody>

<?php

foreach ($tabB as $val) {
  echo '<tr>';
  echo '<td>' . $val . '</td>';
  echo '<td>' . calculerCube($val) . '</td>';
  echo '</tr>';
}

?>

    </tbody>
  </table>
</body>



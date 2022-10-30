<?php

/* Créer un tableau contenant les nombres de 1 à 10 et un autre tableau contenant
les nombres de 11 à 20. Ensuite, créer un autre tableau contenant la somme des
deux premiers tableaux et afficher ses valeurs. Il faut utiliser les boucles
pour créer ces tableaux. */

$tableau1 = array();
$tableau2 = array();
$tableauSomme = array();

for ($i = 1; $i <= 10; $i++) {
  $tableau1[] = $i;
  $tableau2[] = $i + 10;
}

for ($i = 0; $i < 10; $i++) {
  $tableau3[] = $tableau1[$i] + $tableau2[$i];
}

?>

<p>
  <?php
  for ($i = 0; $i < count($tableau3); $i++) {
    echo $tableau3[$i];
    if ($i < count($tableau3) - 1) {
      echo ", ";
    }
  }
  ?>
</p>
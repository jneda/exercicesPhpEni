<!-- Écrire une fonction qui permet de calculer la factorielle d'un nombre
de manière récursive.
Par ex. la factorielle de 7 est : 1 * 2 * 3 * 4 * 5 * 6 * 7
Afficher la factorielle de 20. -->

<?php

function factorielle($n) {
  if ($n === 0) {
    return 1;
  }
  return $n * factorielle($n -1);
}

echo factorielle(7) . "<br>";
echo factorielle(20) . "<br>";

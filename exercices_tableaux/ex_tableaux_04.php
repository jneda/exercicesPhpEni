<!-- Voici deux tableaux :
Le tableau1 composé des éléments 6, 25, 35 et 61.
Le tableau2 composé des éléments 12, 24 et 46.
Écrire le code permettant de calculer une valeur notée S.
La valeur S se calcule en multpliant chaque valeur du tableau1 par chacune de
celles du tableau2 et en additionnant le tout.
Dans cet exemple :
6 * 12 + 6 * 24 + 6 * 46 + 25 * 12 + 25 * 24 + etc.
Il faut utiliser les boucles pour réaliser cet exercice. -->

<?php

$tableau1 = [6, 25, 35, 61];
$tableau2 = [12, 24, 46];

$s = 0;

foreach ($tableau1 as $val1) {
  foreach ($tableau2 as $val2) {
    $s += $val1 * $val2;
  }
}

<?php

// cette fonction-ci ne fonctionne pas
// car c'est la valeur du tableau qui est passée en argument

function echangerMarchePas($tab, $i, $j)
{
  // intervertit les valeurs de $tab[$i] et $tab[$j]
  // puis retourne le tableau modifié

  $temp = $tab[$i];
  $tab[$i] = $tab[$j];
  $tab[$j] = $temp;
}

$tabTest = [0, 1];

var_dump($tabTest);
echangerMarchePas($tabTest, 0, 1);
var_dump($tabTest);

// il faut dès lors passer le tableau par référence si on veut modifier le
// tableau dans le programme principal

function echanger(&$tab,  $i, $j)
{
  $temp = $tab[$i];
  $tab[$i] = $tab[$j];
  $tab[$j] = $temp;
}

$tabTest = [0, 1];

var_dump($tabTest);
echanger($tabTest, 0, 1);
var_dump($tabTest);

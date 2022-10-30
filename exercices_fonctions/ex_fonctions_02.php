<!-- Créer un tableau contenant 10 nombres aléatoires entre 1 et 10 puis
trier celui-ci sans utiliser de fonction de tri tableau comme sort().
Il faudra créer une fonction pour échanger deux valeurs dans un tableau.
Enfin afficher les valeurs séparées par une virgule. -->

<?php

// function utilitaire

function echanger($tab, $i, $j)
{
  // intervertit les valeurs de $tab[$i] et $tab[$j]
  // puis retourne le tableau modifié

  $temp = $tab[$i];
  $tab[$i] = $tab[$j];
  $tab[$j] = $temp;

  return $tab;
}

$tab;
for ($i = 0; $i < 10; $i++) {
  $tab[] = rand(1, 100);
}

// tri à bulles ?

// initialisation de la borne haute de la boucle de tri
$j = count($tab) - 1;

// tant qu'on n'a pas trié tous les éléments du tableau

while ($j > 0) {
  // on recherche l'index du plus grand nombre
  $indexMax = 0;
  for ($i = 1; $i <= $j; $i++) {
    if ($tab[$i] > $tab[$indexMax]) {
      $indexMax = $i;
    }
  }

  // une fois trouvé, on intervertit sa position et celle du dernier élément
  // si nécessaire
  if ($indexMax !== $j) {
    $tab = echanger($tab, $indexMax, $j);
  }

  // enfin on décrémente la borne haute pour ne parcourir que le reste
  // du tableau
  $j--;
}

// affichage

echo implode(",", $tab);
<!-- Créer un tableau contenant 10 nombres de 1 à 10 puis
afficher ceux-ci séparés par un point-virgule sans utiliser de boucle. -->

<?php

$tab = [];

for ($i = 0; $i <= 10; $i++) {
  $tab[] = $i;
}

echo implode(";", $tab);
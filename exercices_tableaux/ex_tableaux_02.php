<!-- Créer un tableau de 10 valeurs au hasard entre 1 et 100. La fonction
rand($min, $max); permet de tirer un nombre au hasard entre $min et $max.
Trier ce tableau du plus petit au plus grand puis mettre toutes les valeurs
dans une chaîne de caractères spéparées par des ; et afficher la chaîne. -->

<?php

$tableau = array();

for ($i = 0; $i < 10; $i++) {
  $tableau[] = rand(1, 100);
}

sort($tableau);

$chaine = implode(";", $tableau);

?>

<p>
  <?php echo $chaine; ?>
</p>
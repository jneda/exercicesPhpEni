<!-- Créer un fichier texte qui stocke le nombre de fois qu'une page a été
vue. -->

<?php

$fileName = "compteurVisites.txt";

if (!file_exists($fileName)) {
  file_put_contents($fileName, 0);
}

$nbVisites = intval(file_get_contents($fileName));

$nbVisites++;

echo "<p>Cette page a été visitée $nbVisites fois.";

file_put_contents($fileName, $nbVisites);

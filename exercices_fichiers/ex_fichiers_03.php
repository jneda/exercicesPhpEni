<!-- Créer une page qui écrit dans un fichier log.txt la date et l'heure
courante et qui affiche le temps en microsecondes pour copier trois images
du répertoire images vers le répertoire archive. -->

<?php

// ouverture du fichier log.txt
$nomFichier = "log.txt";
$pointeurFichier = fopen($nomFichier, "a");

// écriture de la date et de l'heure

fwrite($pointeurFichier, date("Y/m/d h:i:s") . PHP_EOL);

// fermeture du fichier

fclose($pointeurFichier);

// démarrage de la copie des fichiers

$startTime = microtime(true);

$baseSource = "images/";
$baseDestination = "archive/";

$repertoireSource = dir($baseSource);

while ($nomFichier = $repertoireSource->read()) {
  if ($nomFichier !== "." and $nomFichier !== "..") {
    copy($baseSource . $nomFichier, $baseDestination . $nomFichier);
  }
}

// on libère le pointeur vers le répertoire source
$repertoireSource->close();

// fin de la copie des fichiers

$endTime = microtime(true);

// affichage du temps d'exécution

echo "<p>durée d'exécution du programme : " . ($endTime - $startTime)
  . " µs</p>";

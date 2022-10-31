<!-- Placer trois images dans un répertoire images puis créer une page PHP qui
crée un fichier texte contenant le nom et la taille de ces images puis qui copie
ces images dans un répertoire archive au même niveau que le répertoire images. 
-->

<?php

// ouverture du répertoire source
$repertoire = dir("images");

// création du fichier où écrire
$infosImages = fopen("infos_images.txt", "w");

// création du répertoire archive
mkdir("archive");

while ($fichier = $repertoire->read()) {
  // on filtre les items "." et ".."
  if ($fichier !== "." and $fichier !== "..") {
    // construction des chemins source et destination
    $cheminSource = $repertoire->path . "/" . $fichier;
    $cheminDestination = "archive/" . $fichier;

    // écriture des informations dans le fichier
    $infosFichier = $fichier . " - " . filesize($cheminSource) . " bytes";
    fwrite($infosImages, $infosFichier . PHP_EOL);

    // copie des images vers archive
    copy($cheminSource, $cheminDestination);
  }
}

// fermeture du fichier
fclose($infosImages);

// fermeture du répertoire
$repertoire->close();

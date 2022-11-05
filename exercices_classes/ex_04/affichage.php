<?php

require_once "Vehicule.class.php";
require_once "Camion.class.php";
require_once "DeuxRoues.class.php";

$deuxRoues = new DeuxRoues("rouge", 150);
$deuxRoues->ajouterPersonne(70);

echo "<p>Poids du deux roues : " . $deuxRoues->getPoids() . "</p>";

$deuxRoues->setCouleur("vert");
$deuxRoues->setCylindree(1000);

Vehicule::afficherAttributs($deuxRoues);

$camion = new Camion("blanc", 6000);
$camion->ajouterPersonne(84);
$camion->repeindre("bleu");
$camion->setNombrePortes(2);

Vehicule::afficherAttributs($camion);

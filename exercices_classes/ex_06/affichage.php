<?php

require_once "Camion.class.php";

$camion = new Camion("bleu", 10000, 2);
$camion->setLongueur(10);
$camion->mettreEssence(100);
$camion->repeindre("vert");

Vehicule::afficherAttributs($camion);
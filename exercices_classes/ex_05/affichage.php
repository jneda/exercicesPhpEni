<?php

require_once "Vehicule.class.php";
require_once "Voiture.class.php";

$voiture = new Voiture("vert", 2100, 4);
$voiture->ajouterPneusNeige(2);
$voiture->ajouterPersonne(80);
$voiture->setCouleur("bleu");
$voiture->enleverPneusNeige(4);
$voiture->repeindre("noir");

Vehicule::afficherAttributs($voiture);

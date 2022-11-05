<?php

try
{
  $bdd = new PDO("mysql:hostname=localhost; dbname=bd_inscription", "root", "");
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
  die("<p>Échec de la connexion à la base de données.</p>");
}
<?php

require_once "QuatreRoues.class.php";

class Camion extends QuatreRoues
{
  private $longueur;

  // accesseurs

  public function getLongueur()
  {
    return $this->longueur;
  }

  public function setLongueur(int $longueur)
  {
    $this->longueur = $longueur;
  }

  // fonctions de classe

  public function ajouterRemorque(int $longueurRemorque)
  {
    $this->longueur += $longueurRemorque;
  }
}

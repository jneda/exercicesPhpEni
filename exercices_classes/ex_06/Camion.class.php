<?php

require_once "QuatreRoues.class.php";
require_once "Action.class.php";

class Camion extends QuatreRoues implements Action
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

  public function mettreEssence(int $nombreLitres): void
  {
    $this->setPoids($this->getPoids() + $nombreLitres);
  }
}

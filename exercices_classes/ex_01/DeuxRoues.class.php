<?php

require_once "Vehicule.class.php";

class DeuxRoues extends Vehicule
{
  private $cylindree;

  // accesseurs

  public function getCylindree()
  {
    return $this->cylindree;
  }

  public function setCylindree(int $cylindree)
  {
    $this->cylindree = $cylindree;
  }

  // fonctions de classe

  public function mettreEssence($nombreLitres)
  {
  }
}

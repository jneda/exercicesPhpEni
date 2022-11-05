<?php

require_once "QuatreRoues.class.php";

class Voiture extends QuatreRoues
{
  private $nombrePneusNeige;

  // accesseurs

  public function getNombrePneusNeige()
  {
    return $this->nombrePneusNeige;
  }

  public function setNombrePneusNeige(int $nombrePneusNeige)
  {
    $this->$nombrePneusNeige = $nombrePneusNeige;
  }

  // fonctions de classe

  public function ajouterPneusNeige($nombrePneus)
  {
  }

  public function enleverPneusNeige($nombrePneus)
  {
  }
}

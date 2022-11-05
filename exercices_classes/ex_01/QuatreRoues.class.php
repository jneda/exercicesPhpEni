<?php

require_once "Vehicule.class.php";

class QuatreRoues extends Vehicule
{
  private $nombrePortes;

  // accesseurs

  public function getNombrePortes()
  {
    return $this->nombrePortes;
  }

  public function setNombrePortes(int $nombrePortes)
  {
    $this->nombrePortes = $nombrePortes;
  }

  // fonctions de classe

  public function repeindre(string $couleur)
  {
    $this->setCouleur($couleur);
  }
}

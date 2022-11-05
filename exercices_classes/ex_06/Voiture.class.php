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

  public function ajouterPneusNeige(int $nombrePneus)
  {
    $this->nombrePneusNeige += $nombrePneus;
  }

  public function enleverPneusNeige(int $nombrePneus)
  {
    $this->nombrePneusNeige = max([0, $this->nombrePneusNeige - $nombrePneus]);
  }

  public function ajouterPersonne(int $poidsPersonne)
  {
    parent::ajouterPersonne($poidsPersonne);
    if ($this->getPoids() >= 1500 && $this->nombrePneusNeige <= 2) {
      echo "<p>Attention ! Veuillez mettre 4 pneus niege.</p>";
    }
  }
}

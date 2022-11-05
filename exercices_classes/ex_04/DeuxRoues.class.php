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
    // 1 l d'essence pèse 1 kg
    $this->setPoids($this->getPoids() + $nombreLitres);
  }

  public function ajouterPersonne(int $poidsPersonne)
  {
    $poidsCasque = 2;
    $this->setPoids($this->getPoids() + $poidsPersonne + $poidsCasque);
  }
}

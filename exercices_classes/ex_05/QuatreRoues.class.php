<?php

require_once "Vehicule.class.php";

class QuatreRoues extends Vehicule
{
  private $nombrePortes;

  // constructeur

  public function __construct(string $couleur, int $poids, int $nombrePortes)
  {
    parent::__construct($couleur, $poids);
    $this->nombrePortes = $nombrePortes;
  }

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

  public function ajouterPersonne(int $poidsPersonne)
  {
    $this->setPoids($this->getPoids() + $poidsPersonne);
  }
}

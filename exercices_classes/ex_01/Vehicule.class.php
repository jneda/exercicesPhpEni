<?php

class Vehicule
{
  private $couleur;
  private $poids;

  // constructeur

  public function __construct(string $couleur, int $poids)
  {
    $this->couleur = $couleur;
    $this->poids = $poids;
  }

  // accesseurs

  public function getCouleur()
  {
    return $this->couleur;
  }

  public function setCouleur(string $couleur)
  {
    $this->couleur = $couleur;
  }

  public function getPoids()
  {
    return $this->poids;
  }

  public function setPoids(int $poids)
  {
    $this->poids = $poids;
  }

  // fonctions de classe

  public function rouler()
  {
    echo "Le véhicule roule.";
  }

  public function ajouterPersonne(int $poidsPersonne)
  {
    $this->poids += $poidsPersonne;
  }
}

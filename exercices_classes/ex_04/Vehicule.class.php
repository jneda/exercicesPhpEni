<?php

abstract class Vehicule
{
  private $couleur;
  private $poids;

  // constructeur

  public function __construct(string $couleur, int $poids)
  {
    $this->couleur = $couleur;
    $this->poids = $poids;
  }

  // fonction statique

  public static function afficherAttributs($objet)
  {
    if (method_exists($objet, 'getCouleur')) {
      echo "<p>La couleur de l'objet est : " . $objet->getCouleur() ."</p>";
    }

    if (method_exists($objet, 'getPoids')) {
      echo "<p>Le poids de l'objet est : " . $objet->getPoids() ."</p>";
    }

    if (method_exists($objet, 'getNombrePortes')) {
      echo "<p>Le nombre de portes de l'objet est : " . $objet->getNombrePortes() ."</p>";
    }
    
    if (method_exists($objet, 'getCylindree')) {
      echo "<p>La cylindrée de l'objet est : " . $objet->getCylindree() ."</p>";
    }
       
    if (method_exists($objet, 'getLongueur')) {
      echo "<p>La longueur de l'objet est : " . $objet->getLongueur() ."</p>";
    }
           
    if (method_exists($objet, 'getNombrePneusNeige')) {
      echo "<p>Le nombre de pneus neige de l'objet est : " . $objet->getNombrePneusNeige() ."</p>";
    }
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

  abstract public function ajouterPersonne(int $poidsPersonne);
}

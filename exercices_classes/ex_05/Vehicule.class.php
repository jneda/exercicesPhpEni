<?php

abstract class Vehicule
{
  private $couleur;
  private $poids;

  private const SAUT_DE_LIGNE = '<br>';

  static protected $nombreChangementsCouleur = 0;

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
      echo "La couleur de l'objet est : " . $objet->getCouleur() . self::SAUT_DE_LIGNE;
    }

    if (method_exists($objet, 'getPoids')) {
      echo "Le poids de l'objet est : " . $objet->getPoids() . self::SAUT_DE_LIGNE;
    }

    if (method_exists($objet, 'getNombrePortes')) {
      echo "Le nombre de portes de l'objet est : " . $objet->getNombrePortes() . self::SAUT_DE_LIGNE;
    }

    if (method_exists($objet, 'getCylindree')) {
      echo "La cylindrée de l'objet est : " . $objet->getCylindree() . self::SAUT_DE_LIGNE;
    }

    if (method_exists($objet, 'getLongueur')) {
      echo "La longueur de l'objet est : " . $objet->getLongueur() . self::SAUT_DE_LIGNE;
    }

    if (method_exists($objet, 'getNombrePneusNeige')) {
      echo "Le nombre de pneus neige de l'objet est : " . $objet->getNombrePneusNeige() . self::SAUT_DE_LIGNE;
    }

    echo "<p>Nombre de changements de couleur : " . self::$nombreChangementsCouleur;
  }

  // accesseurs

  public function getCouleur()
  {
    return $this->couleur;
  }

  public function setCouleur(string $couleur)
  {
    $this->couleur = $couleur;
    self::$nombreChangementsCouleur += 1;
  }

  public function getPoids()
  {
    return $this->poids;
  }

  public function setPoids(int $poids)
  {
    $this->poids = min($poids, 2100);
  }

  // fonctions de classe

  public function rouler()
  {
    echo "Le véhicule roule.";
  }

  abstract public function ajouterPersonne(int $poidsPersonne);
}

<!-- Créer une fonction prenant en paramètre un tableau contenant un nombre
quelconque de mots pour afficher une phrase contenant de manière aléatoire
tous ces mots. -->

<?php

function randomiserPhrase($mots)
{
  // utilise shuffle() pour randomiser l'ordre
  shuffle($mots);
  
  // construction de la phrase
  return ucfirst(implode(" ", $mots)) . ".";
}

// tests

$mots = ["sapristi", "youpi", "banane", "sandalette", "outre" ,"vagabond"];

echo randomiserPhrase(($mots));

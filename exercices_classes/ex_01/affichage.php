<?php

require_once "Vehicule.class.php";

$vehicule = new Vehicule("noir", 1500);

?>

<p>
  <?php $vehicule->rouler(); ?>
</p>

<?php
$vehicule->ajouterPersonne(70);
?>

<p>
  <?php echo "Poids du véhicule : " . $vehicule->getPoids(); ?>
</p>

<hr>

<?php

require_once "Voiture.class.php";

$voiture = new Voiture("vert", 1400);

for ($i = 0; $i < 2; $i++) {
  $voiture->ajouterPersonne(65);
}

?>

<p>
  <?php echo "Couleur de la voiture : " . $voiture->getCouleur(); ?>
</p>

<p>
  <?php echo "Poids de la voiture : " . $voiture->getPoids(); ?>
</p>

<?php

$voiture->repeindre("rouge");
$voiture->ajouterPneusNeige(2);

?>

<p>
  <?php echo "Couleur de la voiture : " . $voiture->getCouleur(); ?>
</p>

<p>
  <?php echo "Nombre de pneus neige de la voiture : " . $voiture->getNombrePneusNeige(); ?>
</p>

<?php

require_once "DeuxRoues.class.php";

$deuxRoues = new DeuxRoues("noir", 120);
$deuxRoues->ajouterPersonne(80);
$deuxRoues->mettreEssence(20);

?>

<p>
  <?php echo "Couleur du deux roues : " . $deuxRoues->getCouleur(); ?>
</p>

<p>
  <?php echo "Poids du deux roues : " . $deuxRoues->getPoids(); ?>
</p>

<?php

require_once "Camion.class.php";

$camion = new Camion("bleu", 10000);
$camion->setLongueur(10);
$camion->setNombrePortes(2);
$camion->ajouterRemorque(5);
$camion->ajouterPersonne(80);

?>

<p>
  <?php echo "Couleur du camion : " . $camion->getCouleur(); ?>
</p>

<p>
  <?php echo "Poids du camion : " . $camion->getPoids(); ?>
</p>

<p>
  <?php echo "Longueur du camion : " . $camion->getLongueur(); ?>
</p>

<p>
  <?php echo "Nombre de portes du camion : " . $camion->getNombrePortes(); ?>
</p>
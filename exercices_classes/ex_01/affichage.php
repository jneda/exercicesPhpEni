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
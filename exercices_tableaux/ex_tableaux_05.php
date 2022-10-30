<!-- Afficher des bannières de manière aléatoire parmi trois possibles lorsqu'on
arrive sur votre page PHP. Ces bannières ont pour caractéristiques un lien,
une image et une description sur cette image. Ces caractéristiques sont stockées
dans un tableau. -->

<?php
$bannieres = [
  [
    "url" => "http://www.toto1.org",
    "img" => "./images/toto1.png",
    "alt" => "Description1"
  ],
  [
    "url" => "http://www.toto2.org",
    "img" => "./images/toto2.png",
    "alt" => "Description2"
  ], [
    "url" => "http://www.toto3.org",
    "img" => "./images/toto3.png",
    "alt" => "Description3"
  ]
];

$banniere = $bannieres[array_rand($bannieres)];

echo '<a href="' . $banniere["url"] . '" title="' . $banniere["alt"] . '">';
echo '<img src="' . $banniere["img"] . '" alt="' .  $banniere["alt"] . '">';
echo '</a>';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
</head>

<body>
  <h1>Bienvenue sur le site d'inscription "Formation pour tous"</h1>
  <p class="consigne">
    Veuillez remplir tous les champs du formulaire puis cliquer sur le bouton
    Envoyer pour valider votre inscription
  </p>
  <form action="ajouter.php" method="POST">
    <div class="form-input">
      <label for="nom">Nom :<input type="text" id="nom" name="nom"
          placeholder="Entrez votre nom" required="required"></label>
    </div>
    <div class="form-input">
      <label for="prenom">Prénom :<input type="text" id="prenom" name="prenom"
          placeholder="Entrez votre prénom" required="required"></label>
    </div>
    <div class="form-input">
      <label for="intitule">Intitulé de la formation :<input
          type="text" id="intitule" name="intitule"
          placeholder="Entrez un intitulé" required="required"></label>
    </div>
    <div class="form-input">
      <label for="debut">Date de début de la formation :<input type="date"
          id="debut" name="debut" required="required"></label>
    </div>
    <div class="form-input">
      <label for="fin">Date de fin de la formation :<input type="date"
          id="fin" name="fin" required="required"></label>
    </div>
    <div class="form-input">
      <label for="email">Adresse email :<input type="email" id="email"
          name="email" placeholder="Entrez une adresse email valide"
          required="required"></label>
    </div>
    <div class="form-input">
      <label for="consentement"><input type="checkbox" id="consentement"
          name="consentement" required="required">
          J'accepte les conditions visibles sur <a href="#">ce lien</a>.
      </label>
    </div>
    <div class="form-input">
      <input type="submit" value="Envoyer">
    </div>
  </form>

  <?php
  // affichage des messages d'erreur
  if (isset($_GET["error"])) {
    if ($_GET["error"] === "1") {
      echo "<p class=\"error\">Email déjà enregistré.</p>";
    }
  }
  ?>
</body>

</html>
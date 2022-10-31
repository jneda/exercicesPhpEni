<!-- Créer une page login.php contenant un formulaire avec une zone login et
une zone mot de passe. Ajouter un bouton "vérifier" de type submit qui
appelle la page verif_login.php. Cette page affiche "login correct" si
le nom est "Dupont" et le mot de passe "alibaba", sinon cette page
redirige sur la page login.php avec le message "login incorrect". -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    :root,
    :root::before,
    :root::after {
      box-sizing: border-box;
    }

    form {
      width: 80%;
      max-width: 20rem;
      margin: 0 auto;
      margin-top: 2rem;
      padding: 1rem;
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 0.4rem;
    }

    form label {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    form label input {
      width: 60%;
    }

    form input[type="submit"] {
      width: 50%;
      margin: 0 auto;
      padding: 0.2rem;
    }

    form .error-message {
      color: red;
      text-align: center;
      margin: 0;
    }
  </style>
</head>

<body>
  <form action="verif_login.php" method="POST">
    <label for="nom">Nom :<input type="text" name="nom" id="nom"></label>
    <label for="mdp">Mot de passe :<input type="password" name="mdp" id="mdp"></label>
    <input type="submit" value="Vérifier">
    <?php

    if (isset($_GET["login_error"]) and $_GET["login_error"]) {
        echo '<p class="error-message">Login incorrect</p>';
    }

    ?>
  </form>
</body>

</html>


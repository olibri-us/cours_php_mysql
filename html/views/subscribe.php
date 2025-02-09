<head>
  <title>Création de compte</title>
  <link href="../style.css" rel="stylesheet" />
</head>

<h1>Créer un compte</h1>

<form action="/actions/subscribe.php" method="POST">
    <label for="name">
        Nom
        <input type="text" id="name" name="name">
    </label>
    <label for="password">
        Mot de passe
        <input type="password" id="password" name="password">
    </label>
    <input type="submit" value="Créer">
</form>
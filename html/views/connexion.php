<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/author/list.php");
//Donne la liste d'auteur au client
$authorList = list_authors();
?>

<head>
  <title>Connexion</title>
  <link href="../style.css" rel="stylesheet" />
</head>


<h1>Connexion</h1>
<h3>Qui êtes vous ? </h3>

<form action="/actions/connexion.php" method="POST">
  <!-- <select name="author_id" id="author">
    <?php foreach ($authorList as $author): ?>
      <option value="<?= $author['id'] ?>" <?php if (!empty($article) && $author['id'] === $article['author_id']) echo ('selected') ?>>
        <?= $author['name'] ?>
      </option>
    <?php endforeach ?>
  </select> -->
  <label for="name">
        Nom d'utilisateur
        <input type="text" id="name" name="name">
    </label>
  <label for="password">
        Mot de passe
        <input type="password" id="password" name="password">
    </label>
  <input type="submit" value="Connexion" />
</form>

<a href="/views/subscribe.php">Créer un compte</a>
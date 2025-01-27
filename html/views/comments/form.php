<?php
// include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/comment/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();
?>

<head>
  <link href="/style.css" rel="stylesheet" />
</head>

<form action="/actions/comment/add.php?article=<?= $_GET["article"] ?>" method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un article </h3>
  <label for="title">Titre</label>
  <input type="text" name="title" value="<?= $article['title'] ?? '' ?>" required>
  <label for="content"> Contenu</label>
  <textarea name="content" required><?= $article['content'] ?? '' ?></textarea>
  <input type="submit" value="Enregistrer" />
</form>

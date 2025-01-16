<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/handlers/article/view.php");
if (!empty($_GET["article"])) {
  $article = view_article($_GET["article"]);
  $action = "/handlers/article/update.php?article=" . $article['id'];
} else {
  $action = "/handlers/article/add.php";
}
?>

<head>
  <link href="/style.css" rel="stylesheet" />
</head>

<form action=<?= $action ?> method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un article </h3>
  <label for="title"> Titre</label>
  <input type="text" name="title" value="<?= $article['title'] ?? '' ?>" required>
  <label for="author"> Auteur</label>
  <input type="text" name="author" value="<?= $article['author'] ?? '' ?>" required>
  <label for="article_img"> Image</label>
  <input type="file" name="article_img" required>
  <label for="content"> Contenu</label>
  <textarea name="content" required><?= $article['content'] ?? '' ?></textarea>
  <input type="submit" value="Enregistrer" />
</form>
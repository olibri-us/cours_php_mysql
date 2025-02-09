<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();

if (!empty($_GET["article"])) {
  $article = view_article($_GET["article"]);
  $action = "/actions/article/update.php?article=" . $article['id'];
} else {
  $action = "/actions/article/add.php";
}
?>

<head>
  <title>Ajouter un article</title>
  <link href="/style.css" rel="stylesheet" />
</head>

<form action=<?= $action ?> method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un article </h3>
  <label for="title">Titre</label>
  <input type="text" name="title" value="<?= $article['title'] ?? '' ?>" required>
  
  <label for="article_img"> Image</label>
  <input type="file" name="article_img" required>
  <label for="content"> Contenu</label>
  <textarea name="content" required><?= $article['content'] ?? '' ?></textarea>
  <input type="submit" value="Enregistrer" />
</form>

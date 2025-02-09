<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/comment/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();

if (!empty($_GET["comment"])) {
  $comment = view_comment($_GET["comment"]);
  $action = "/actions/comment/update.php";
  $title = "Modifier votre commentaire";
} else {
  $article = view_article($_GET["article"]);
  $action = "/actions/comment/add.php";
  $title = "Ajouter un commentaire";
}
?>

<form action=<?= $action ?> method="POST" class="form">
  <h3><?= $title ?></h3>
  <textarea name="content" required><?= $comment['content'] ?? '' ?></textarea>
  <? if (isset($comment)): ?>
    <input name="id" type="number" class="hidden" value="<?= $comment['id'] ?>" />
  <? else: ?>
    <input name="article" type="number" class="hidden" value="<?= $article['id'] ?>" />
  <? endif; ?>
  <input type="submit" value="Enregistrer" />
</form>

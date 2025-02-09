<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/comment/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();

if (!empty($_GET["comment"])) {
  $comment = view_comment($_GET["comment"]);
  $action = "/actions/comment/update.php?comment=" . $comment['id'];
} elseif (!empty($_GET["article"])) {
  $article = view_article($_GET["article"]);
  $action = "/actions/comment/add.php";
}
?>

<form action=<?= $action ?> method="POST" class="form">
  <h3>Ajouter un commentaire</h3>
  <textarea name="content" required><?= $comment['content'] ?? '' ?></textarea>
  <? if ($article): ?>
    <input name="article" type="number" class="hidden" value="<?= $article['id'] ?>" />
  <? endif; ?>
  <input type="submit" value="Enregistrer" />
</form>

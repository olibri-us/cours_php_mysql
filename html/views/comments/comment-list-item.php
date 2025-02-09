<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");
$author = get_connected_author();
$authorized = $author['id'] == $comment['author_id'];
?>

<div class="comment">
  <h3><?= $comment['author_name'] ?></h3>
  <p><?= $comment['content'] ?></p>
  <p><?= $comment['date'] ?></p>
  <? if ($authorized): ?>
    <div class="flex">
      <a href="/views/comments/edit.php?comment=<?= $comment['id'] ?>">
        <button class="action">Modifier</button>
      </a>
      <form action="/actions/comment/delete.php" method="POST" class="form">
        <input name="comment" type="number" class="hidden" value="<?= $comment['id'] ?>" />
        <input name="article" type="number" class="hidden" value="<?= $comment['article_id'] ?>" />
        <input type="submit" class="danger" value="Supprimer" />
      </form>
    </div>
  <? endif; ?>
</div>

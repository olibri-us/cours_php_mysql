<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");

function list_comments($article_id)
{
  global $root;
  $bdd = connect_server('fake_reddit');

  $request = load_script($bdd, "comment/list.sql");
  $request->execute(['article_id' => $article_id]);

  return $request->fetchAll(PDO::FETCH_ASSOC);
}

$comments = list_comments($id);
?>

<div>
  <?php if (empty($comments)): ?>
    <p>Aucun commentaire pour cet article.</p>
  <?php else: ?>
    <?php foreach ($comments as $comment) : ?>
      <div class="comment">
        <p><?= $comment['created_at'] ?></p>
        <p>By <strong><?= $comment['author'] ?></strong></p>
        <p><?= $comment['content'] ?></p>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

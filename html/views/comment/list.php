<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();

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

<div class="comments-container">
  <?php if (empty($comments)): ?>
    <p>Aucun commentaire pour cet article.</p>
  <?php else: ?>
    <?php foreach ($comments as $comment) : ?>
      <div class="comment">
        <div class="comment-content">
          <div class="comment-author">
            <p><?= $comment['created_at'] ?> By <strong><?= $comment['author'] ?></strong></p>
          </div>
          <p><?= $comment['content'] ?></p>
        </div>
        <div class="comment-delete">
          <?php if ($author && $author['id'] == $comment['author_id']) : ?>
            <form action="/actions/comment/delete.php" method="GET" style="display:inline;" >
              <input type="hidden" name="comment" value="<?= $comment['id'] ?>">
              <button type="submit" id="delete-btn">🗑️</button>
            </form>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

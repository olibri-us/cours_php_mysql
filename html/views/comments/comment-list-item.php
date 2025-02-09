<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php")
?>

<a href="/views/comments/view.php?comment=<?= $comment["id"] ?>">
  <h3 class="title"><?= $comment["title"] ?></h3>
</a>
<a href="/actions/comment/delete.php?comment=<?= $comment["id"] ?>" class="supp">Supprimer le commentaire</a>
<a href="/views/comments/form.php?comment=<?= $comment["id"] ?>" class="update">Modifier le commentaire</a>
<div class="minia">
  <div>
    <p><?= $article["author_name"] . ", " . format_sql_date($article["date"]) ?></p>
    <p><?= $article['content'] ?></p>
    <?php if (isset($article['comments'])): ?>
      <p><?= "Nombre de commentaires : " . count($article["comments"]) ?></p>
    <?php endif; ?>
  </div>
</div>
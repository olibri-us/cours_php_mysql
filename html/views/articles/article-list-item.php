<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php")
?>

<a href="/views/articles/view.php?article=<?= $article["id"] ?>">
  <h3 class="title"><?= $article["title"] ?></h3>
</a>
<a href="/actions/article/delete.php?article=<?= $article["id"] ?>" class="supp">Supprimer l'article</a>
<a href="/views/articles/form.php?article=<?= $article["id"] ?>" class="update">Modifier l'article</a>
<div class="minia">
  <img src="<?= $article["img"] ?>" alt="<?= $article["title"] ?>" class="thumbnail">
  <div>
    <p><?= $article["author_name"] . ", " . format_sql_date($article["date"]) ?></p>
    <p><?= $article['content'] ?></p>
    <?php if (!empty($article['comments']) && is_array($article['comments'])): ?>
      <p>Nombre de commentaires : <?= count($article["comments"]) ?></p>
      <ul>
        <?php foreach ($article['comments'] as $comment): ?>
          <li>
            <strong><?= htmlspecialchars($comment["author_name"]) ?> :</strong>
            <?= htmlspecialchars($comment["content"]) ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Aucun commentaire pour cet article.</p>
    <?php endif; ?>
  </div>
</div>
</div>
</div>
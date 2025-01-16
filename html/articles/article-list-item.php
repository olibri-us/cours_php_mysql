<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php")
?>

<a href="/articles/view.php?article=<?= $article["id"] ?>">
  <h3 class="title"><?= $article["title"] ?></h3>
</a>
<a href="/handlers/article/delete.php?article=<?= $article["id"] ?>" class="supp">Supprimer l'article</a>
<a href="/handlers/article/form.php?article=<?= $article["id"] ?>" class="update">Modifier l'article</a>
<div class="minia">
  <img src="<?= $article["img"] ?>" alt="<?= $article["title"] ?>" class="thumbnail">
  <div>
    <p><?= $article["author"] . ", " . format_sql_date($article["date"]) ?></p>
    <p><?= $article['content'] ?></p>
    <?php if (isset($article['comments'])): ?>
      <p><?= "Nombre de commentaires : " . count($article["comments"]) ?></p>
    <?php endif; ?>
  </div>
</div>
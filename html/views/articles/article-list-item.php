<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");
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
    <?php if (isset($article['comments_number'])): ?>
      <p><?= "Nombre de commentaires : " . $article['comments_number'] ?></p>
    <?php endif; ?>
  </div>
</div>
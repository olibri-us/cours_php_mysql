<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/list.php');
$comments = list_comments();
?>


<div class="card-article">
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
      <h2>Nombre de commentaires : <?= count($comments) ?></h2>
    </div>
  </div>
</div>
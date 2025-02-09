<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

$comments = $article["comment_count"];
?>

<a href="/views/articles/view.php?article=<?= $article["id"] ?>">
  <h3 class="title"><?= $article["title"] ?></h3>
</a>
<a href="/actions/article/delete.php?article=<?= $article["id"] ?>" class="supp">Supprimer l'article</a>
<a href="/views/articles/article_form.php?article=<?= $article["id"] ?>" class="update">Modifier l'article</a>
<div class="minia">
  <img src="<?= $article["img"] ?>" alt="<?= $article["title"] ?>" class="thumbnail">
  <div>
    <p><?= $article["author_name"] . ", " . format_sql_date($article["date"]) ?></p>
    <p><?= $article['content'] ?></p>
    <p><?= $comments > 0 ? $comments : "Aucun" ?> commentaire<?= $comments > 1 ? "s" : "" ?></p>
  </div>
</div>
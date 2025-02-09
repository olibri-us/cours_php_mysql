<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php")
?>


<a href="/views/articles/view.php?article=<?= $article["id"] ?>" style="text-decoration: none; color: black;">
  <div class="minia">

    <div class="title-section">
      <h3 class="title"><?= $article["title"] ?></h3>
      <img src="<?= $article["img"] ?>" alt="<?= $article["title"] ?>" class="thumbnail">
    </div>


  <div class="article-content">
    <p><?= $article["author_name"] . ", " . format_sql_date($article["date"]) ?></p>
    <p><?= $article['content'] ?></p>
    <div class="article-actions">
      <!-- <a href="/actions/article/delete.php?article=<?= $article["id"] ?>" class="supp">Supprimer l'article</a> -->
      <form
        action="/actions/article/delete.php?article=<?= $article["id"] ?>"
        method="POST"
        style="display:inline;">
        <button type="submit" class="supp">Supprimer l'article</button>
      </form>
      <!-- <a href="/views/articles/form.php?article=<?= $article["id"] ?>" class="update">Modifier l'article</a> -->
      <form action="/views/articles/form.php?article=<?= $article["id"] ?>"
        method="POST"
        style="display:inline;">
        <button type="submit" class="supp">Modifier l'article</button>
      </form>
    </div>
    <?php if (isset($article['comments'])): ?>
      <p><?= "Nombre de commentaires : " . count($article["comments"]) ?></p>
    <?php endif; ?>
  </div>

  </div>
</a>

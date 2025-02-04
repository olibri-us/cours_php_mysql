<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/list.php');

  $id = $_GET["article"];
  $article = view_article($id);
  $comments = listCommentsPerArticle();
  ?>
  <section>
    <a href="/">
      <button>Retour</button>
    </a>
    <article>
      <h1 class="title"><?= $article["title"] ?></h1>
      <span><time><?= format_sql_date($article["date"]) ?></time></span>
      <span><?= $article["author_name"] ?></span>
      <div class="content">
        <img src="<?= $article["img"] ?>" alt="chat" class="image">
        <p class="description"><?= $article["content"] ?></p>
      </div>
    </article>

    <aside>
      <h3>Commentaires (<?= count($comments) ?>)</h3>
      <a href="/views/comments/form.php?article=<?= $article["id"] ?>">
        <button>Ajouter un commentaire</button>
      </a>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <div class="comment-header">
            <h3><?= $comment['author_name'] ?></h3>
            <p><?= format_sql_date($comment['date']) ?></p>
          </div>
          <p><?= $comment['content'] ?></p>
          <a href="/actions/comment/delete.php?comment=<?= $comment['id'] ?>&article=<?= $article['id'] ?>">
            <button>Supprimer</button>
          </a>
        </div>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>
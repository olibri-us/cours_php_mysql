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
  $comments = list_comments($id);

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

      <aside>
        <a href="/views/comments/form.php?article=<?= $id ?>">
          <button>Ajouter un commentaire</button>
        </a>
      </aside>

      <h2>Nombre de commentaires : <?= count($comments) ?></h2>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <p><?= $comment['author_name'] ?></p>
          <aside>
            <a href="/actions/comment/delete.php?comment=<?= $comment['id'] ?>&article=<?= $id ?>">
              <button>Supprimer le commentaire</button>
            </a>
          </aside>
        </div>
      <?php endforeach; ?>

    </aside>
  </section>
</body>

</html>
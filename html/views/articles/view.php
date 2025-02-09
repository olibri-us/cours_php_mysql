<html lang="fr">

<head>
  <title>Mon article</title>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/list.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/utils.php');


  $article_id = $_GET["article"];
  $article = view_article($article_id);
  $comments = list_comments($article_id);

  $session_author = get_connected_author();
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
    <a href="/views/comments/form.php?article=<?= $article_id ?>">
      <button>Ajouter un commentaire</button>
    </a>
    <aside>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <h3><?= $comment['title'] ?></h3>
          <p><?= $comment['content'] ?></p>
          <p><?= format_sql_date($comment['date']) ?>, <?= $comment['author_name'] ?></p>
          <? if ($session_author['id'] === $comment['author_id']) : ?>
            <a href="/actions/comment/delete.php?comment=<?= $comment['id'] ?>&article=<?= $article_id ?>"><button>Supprimer le commentaire</button></a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>

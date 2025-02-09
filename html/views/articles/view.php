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
  $comments = list_comments_by_article($article['id']) ?? [];

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
      <? include($_SERVER['DOCUMENT_ROOT'] . '/views/comments/form.php') ?>
      <?php foreach ($comments as $comment) : ?>
        <? include($_SERVER['DOCUMENT_ROOT'] . '/views/comments/comment-list-item.php') ?>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>

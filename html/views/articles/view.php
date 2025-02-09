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
  $comments = list_comments($id) ?? [];

  $action = "/actions/comment/add.php";

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
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/articles/comment_form.php'; ?>
      <?php if ($comments) : ?>
        <aside>
          <?php foreach ($comments as $comment) : ?>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/articles/comment_list_item.php'; ?>
          <?php endforeach; ?>
        </aside>
      <?php else : ?>
        <h3>Aucun commentaire, soyez le premier à commenter !</h3>
      <?php endif; ?>
    </article>
  </section>
</body>

</html>
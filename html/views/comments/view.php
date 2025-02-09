<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/view.php');

  $id = $_GET["comment"];
  $comment = view_comment($id);
  $comments = $article["comments"] ?? [];

  ?>
  <section>
    <a href="/">
      <button>Retour</button>
    </a>
    <article>
      <span><time><?= format_sql_date($comment["date"]) ?></time></span>
      <span><?= $comment["author_name"] ?></span>
      <div class="content">
        <p class="description"><?= $comment["content"] ?></p>
      </div>
    </article>
    <aside>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <h3><?= $comment['author'] ?></h3>
          <p><?= $comment['content'] ?></p>
          <p><?= format_sql_date($comment["date"]) ?></p>
        </div>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>
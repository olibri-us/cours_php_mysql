<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connector.php';
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');

  if (!isset($_GET["article"])) {
    echo "<h2>Article introuvable</h2>";
    exit;
  }

  $id = $_GET["article"];
  $article = view_article($id);

  if (!$article) {
    echo "<h2>Article introuvable</h2>";
    exit;
  }

  $comments = $article["comments"] ?? [];
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

    <div id="comment-form-container">
      <h2>Laisser un commentaire</h2>
      <form action="../../actions/comment/add.php" method="POST">
        <input type="hidden" name="article_id" value="<?= $id ?>">
        <textarea name="content" required></textarea>
        <button type="submit">Envoyer</button>
      </form>
    </div>


    <aside>
      <h2>Commentaires</h2>
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/comment/list.php'; ?>
    </aside>
  </section>
</body>

</html>

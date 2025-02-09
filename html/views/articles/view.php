<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connector.php';
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/view.php');

  if (!isset($_GET["article"])) {
    echo "<h2>Article introuvable</h2>";
    exit;
  }

  $id = $_GET["article"];
  $article = view_article($id);
  $comments = view_comments($id);
  $commentsCount = count($comments);


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
      <div class="content">
        <img src="<?= $article["img"] ?>" alt="chat" class="image" />
        <div class="article-content">
          <h1 class="title"><?= $article["title"] ?></h1>
          <p class="description"><?= $article["content"] ?></p>
          <div class="article-footer">
            <span>Publié le: <time><?= format_sql_date($article["date"]) ?></time></span>
            <span>par <strong><?= $article["author_name"] ?></strong></span>
            <p><?php echo $commentsCount; ?> Commentaire(s)</p>
          </div>
        </div>
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


    <div class="comments-container">
      <h2>Commentaires</h2>
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/comment/list.php'; ?>
    </div id="comments-container">>
  </section>
</body>

</html>

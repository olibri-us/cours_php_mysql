<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');

  $id = $_GET["article"];
  $article = view_article($id);
  $comments = $article["comments"] ?? [];
  ?>
  <section>
    <article>
      <h1 class="title"><?= $article["title"] ?></h1>
      <span><time><?= format_sql_date($article["date"]) ?></time></span>
      <span><?= $article["author_name"] ?></span>
      <div class="content">
        <img src="<?= $article["img"] ?>" alt="chat" class="image">
        <p class="description"><?= $article["content"] ?></p>
        <form action="/actions/comment/add.php" method="POST">
          <input type="hidden" name="article_id" value="<?= htmlspecialchars($id) ?>">

          <label for="author">Nom :</label>
          <input type="text" id="author" name="author" required>

          <label for="content">Commentaire :</label>
          <textarea id="content" name="content" required></textarea>

          <button type="submit">Envoyer</button>
        </form>
        <aside>
          <?php if (!empty($comments)) : ?>
            <?php foreach ($comments as $comment) : ?>
              <div class="comment">
                <h3><?= htmlspecialchars($comment['author']) ?></h3>
                <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                <p><time><?= format_sql_date($comment['date']) ?></time></p>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
            <p>Aucun commentaire pour cet article.</p>
          <?php endif; ?>
        </aside>
      </div>
    </article>
    <aside>
      <?php foreach ($comments as $comment) : ?>
        <div class="comment">
          <h3><?= $comment['author'] ?></h3>
          <p><?= $comment['content'] ?></p>
          <p><?= $comment['date'] ?></p>
          <p><?= $comment['comments'] ?></p>
        </div>
      <?php endforeach; ?>
    </aside>
  </section>
</body>

</html>
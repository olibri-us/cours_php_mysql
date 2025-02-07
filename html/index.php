<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/list.php");
  include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");
  
  $author = get_connected_author();

  $articles = list_articles();
  ?>
  <section>
    <?php if ($articles) : ?>
      <?php foreach ($articles as $article): ?>
        <article>
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/views/articles/article-list-item.php'; ?>
        </article>
      <?php endforeach; ?>
    <?php else : ?>
      <h3>Oops! Aucun article. :)</h3>
    <?php endif; ?>
    <aside>
      <a href="/views/articles/form.php">
        <button>Ajouter un article</button>
      </a>
    </aside>
  </section>
  <a href="/actions/logout.php">
    <button>Déconnexion</button>
  </a>
</body>

</html>
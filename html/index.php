<html lang="fr">

<head>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <?php
    function get_connected_author_id() {
      session_start();
      $session_author_id = $_SESSION["author_id"] ?? null;
      if (!$session_author_id) {
        //Redirection ver l'url de connexion
        header('Location: /views/connexion.php');
        die;
      }
      return $session_author_id;
    }
    $author_id = get_connected_author_id()
  ?>

  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/list.php");
  $articles = list_articles();
  ?>
  <section>
    <?php if ($articles) : ?>
      <?php foreach ($articles as $article): ?>
        <article>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/views/articles/article-list-item.php'; ?>
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
</body>

</html>

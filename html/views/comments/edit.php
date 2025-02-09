<html lang="fr">

<head>
  <link href="../../style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/comment/view.php');

  $id = $_GET["comment"];
  $comment = view_comment($id);

  ?>
  <a href="/views/articles/view.php?article=<?= $comment['article_id'] ?>">
    <button>Retour</button>
  </a>
  <? include($_SERVER['DOCUMENT_ROOT'] . '/views/comments/form.php') ?>
</body>

</html>

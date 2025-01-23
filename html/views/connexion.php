<?php
  include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/author/list.php");
  //Donne la liste d'auteur au client
  $authorList = list_authors();
?>


<h1>Connexion</h1>
<h3>Qui êtes vous ? </h3>

<form action="/actions/connexion.php" method="POST">
  <select name="author_id" id="author">
    <?php foreach ($authorList as $author): ?>
      <option value="<?= $author['id'] ?>" <?php if (!empty($article) && $author['id'] === $article['author_id']) echo ('selected') ?>>
        <?= $author['name'] ?>
      </option>
    <?php endforeach ?>
  </select>
  <input type="submit" value="Connexion" />
</form>

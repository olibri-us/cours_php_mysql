<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/comment/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();

$action = "/actions/comment/add.php?article=" . $_GET['article'];

?>

<head>
  <link href="/style.css" rel="stylesheet" />
</head>

<form action=<?= $action ?> method="POST" class="form" enctype="multipart/form-data">
  <h3>Ajouter un commentaire </h3>

  <label for="content"> Votre commentaire</label>
  <textarea name="content" required><?= $comment['content'] ?? '' ?></textarea>
  <input type="submit" value="Enregistrer" />
</form>
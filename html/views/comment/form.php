<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connector.php';

$article_id = $_GET['article_id'] ?? null;
if (!$article_id) {
  echo "<p>Erreur : Article non spécifié.</p>";
  return;
}
?>

<form action="../../actions/comment/add.php" method="POST">
  <input type="hidden" name="article_id" value="<?= $article_id; ?>">
  <textarea name="content" required></textarea>
  <button type="submit">Ajouter</button>
</form>

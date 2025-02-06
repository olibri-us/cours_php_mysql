<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();
$bdd = connect_server('fake_reddit');

if (!isset($_POST['article_id']) || empty($_POST['content'])) {
  die("Erreur : Article non spécifié ou contenu vide.");
}

$request = load_script($bdd, "comment/add.sql");

if (!$request) {
  die("Erreur : Impossible de charger le script SQL.");
}

$result = $request->execute([
  'article_id' => $_POST['article_id'],
  'author_id' => $author['id'],
  'content' => $_POST['content'],
]);

header("Location: /views/articles/view.php?article=" . $_POST['article_id']);
exit();

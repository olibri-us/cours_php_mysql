<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();
$article = $_GET["article"];

$bdd = connect_server('fake_reddit');

// add article into database
$request_add_comment = load_script($bdd, "comment/add.sql");

$result_add_comment = $request_add_comment->execute([
  'title' => $_POST['title'],
  'date' => date('Y-m-d'),
  'author_id' => $author['id'],
  'article_id' => $article,
  'content' => $_POST['content'],
]);

header('Location: /views/articles/view.php?article='.$article);

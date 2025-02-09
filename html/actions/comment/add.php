<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();
$article_id = $_GET['article'];

$bdd = connect_server('fake_reddit');

// add comment into database

$request = load_script($bdd, "comment/add.sql");

$result = $request->execute([
  'date' => date('Y-m-d'),
  'author_id' => $author['id'],
  'content' => $_POST['content'],
  'article_id' => $article_id,
]);


header('Location: /views/articles/view.php?article=' . $article_id);

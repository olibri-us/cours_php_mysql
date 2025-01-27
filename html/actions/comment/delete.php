<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database/connector.php");
$bdd = connect_server('fake_reddit');

$comment_id = $_GET['comment'];
$article_id = $_GET['article'];

$request = load_script( $bdd,  "comment/delete.sql");

$result = $request->execute([
  'id' =>  $comment,
  'article_id' => $article_id]);

header('Location: /views/articles/view.php?article='.$article_id);
?>

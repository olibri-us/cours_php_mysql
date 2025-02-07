<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();


$bdd = connect_server('fake_reddit');

// Requête d'ajout de commentaire
$request = load_script($bdd, "comment/add.sql");

// handle image upload
$newFileName = handle_img_upload('article_img');

// add article into database
$request = load_script($bdd, "article/add.sql");

$result = $request->execute([
  'title' => $_POST['title'],
  'date' => date('Y-m-d'),
  'author_id' => $author['id'],
  'img_url' => $newFileName,
  'content' => $_POST['content'],
]);

header('Location: /index.php');

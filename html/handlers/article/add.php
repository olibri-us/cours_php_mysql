<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database.php");
include_once("$root/utils.php");

$bdd = connect_server('fake_reddit');

// handle image upload
$newFileName = handle_img_upload('article_img');

// add article into database
$request = load_script($bdd, $root . "/scripts/article/add.sql");

$result = $request->execute([
  'title' => $_POST['title'],
  'date' => date('Y-m-d'),
  'author' => $_POST['author'],
  'img_url' => $newFileName,
  'content' => $_POST['content'],
]);

header('Location: /index.php');

<?php
// Chemin de selection de la db
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database/connector.php");
include_once("$root/utils.php");
$bdd = connect_server('fake_reddit');

// handle image upload
$newFileName = handle_img_upload('article_img');

// update article from database
// Chargement du script update.sql
$request = load_script($bdd,  "article/update.sql");

//Execution de la request "update"
$result = $request->execute([
    'id' =>  $_GET['article'],
    'title' => $_POST['title'],
    'author_id' => $_POST['author_id'],
    'img_url' => $newFileName,
    'content' => $_POST['content'],
]);

//Redirection ver l'url de l'index
header('Location: /index.php');

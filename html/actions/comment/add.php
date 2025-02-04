<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();
$articleId = $_GET["article"];

$bdd = connect_server('fake_reddit');

// add article into database
$request = load_script($bdd, "comment/add.sql");

$result = $request->execute([
    'content' => $_POST['content'],
    'date' => date('Y-m-d'),
    'author_id' => $author['id'],
    'article_id' => $articleId,
]);

header('Location: /views/articles/view.php?article=' . $articleId);

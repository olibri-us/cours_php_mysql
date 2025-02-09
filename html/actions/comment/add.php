<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$author = get_connected_author();

$bdd = connect_server('fake_reddit');

// add comment into database
$request = load_script($bdd, "comment/add.sql");

$result = $request->execute([
    'date' => date('Y-m-d H:i:s'),
    'article_id' => $_POST['article_id'],
    'author_id' => $author['id'],
    'content' => $_POST['content'],
]);

header('Location: /views/articles/view.php?article=' . $_POST['article_id']);

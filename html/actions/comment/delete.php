<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$bdd = connect_server('fake_reddit');
// $connectedAuthor = get_connected_author();
// $originalAuthor = getOriginalAuthor();

// if ($connectedAuthor['id'] === $originalAuthor['id']) {
$request = load_script($bdd, "comment/delete.sql");
$result = $request->execute([
    'id' =>  $_GET['comment']
]);
// }

header('Location: /views/articles/view.php?article=' . $_GET['article']);

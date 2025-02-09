<?php
// Chemin de selection de la db
$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

$bdd = connect_server('fake_reddit');

// delete comment from database
// Chargement du script delete.sql
$request = load_script($bdd,  "comment/delete.sql");

//Execution de la request "delete"
$result = $request->execute([
    'id' =>  $_GET['comment']
]);

header('Location: /views/articles/view.php?article=' . $_GET['article']);

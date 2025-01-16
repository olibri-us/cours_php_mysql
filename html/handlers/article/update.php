<?php
// Chemin de selection de la db
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database.php");
$bdd = connect_server('fake_reddit');

// delete article from database
// Chergement du script delete.sql
$request = load_script($bdd, $root . "/scripts/article/update.sql");

//Execution de la request "delete"
$result = $request->execute([
    'id' =>  $_GET['article']
]);

//Redirection ver l'url de l'index
header('Location: /index.php');

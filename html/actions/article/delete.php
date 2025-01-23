<?php
// Chemin de selection de la db
  $root = $_SERVER['DOCUMENT_ROOT'];
  include_once("$root/database/connector.php");
  $bdd = connect_server('fake_reddit');

// delete article from database
// Chergement du script delete.sql
$request = load_script( $bdd,  "article/delete.sql");

//Execution de la request "delete"
$result = $request->execute([
  'id' =>  $_GET['article']
]);

//Redirection ver l'url de l'index
header('Location: /index.php');
?>

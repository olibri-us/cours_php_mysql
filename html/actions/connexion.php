<?php
$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/actions/author/view.php");

//Recupere l'id de l'auteur envoyé par le client (client choisis l'auteur)
$author_name = $_POST["name"];
$author_password = $_POST["password"];

$author = load_author_by_name($author_name);

if (!$author) {
  header('Location: /views/connexion_error.php');
  die;
}

if (!password_verify($author_password, $author['password'])) {
  header('Location: /views/connexion_error.php');
  die;
}

//Demarre une session
session_start();

// Donne le author_id au tableau de session
$_SESSION["author"] = $author;

//Redirige vers l'index
header('Location: /index.php');
?>

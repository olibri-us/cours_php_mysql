<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

function view_comments($article_id)
{
  $bdd = connect_server('fake_reddit');

  // Charger la requête SQL depuis un fichier (si tu en utilises un)
  $request = $bdd->prepare("SELECT * FROM comments WHERE article_id = :article_id ORDER BY created_at DESC");
  $request->execute(['article_id' => $article_id]);

  return $request->fetchAll(PDO::FETCH_ASSOC);
}

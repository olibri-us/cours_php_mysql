<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");

function list_comments_by_article($article_id)
{
  global $root;
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd, "comment/list_by_article.sql");
  $request->execute([
    'article_id' => $article_id
  ]);

  return $request->fetchAll(PDO::FETCH_ASSOC);
}

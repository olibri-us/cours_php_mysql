<!-- exactement le meme fichier view que pour article mais pour les commentaires -->
<?php
$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

function view_comments($article_id)
{
  global $root;
  $bdd = connect_server('fake_reddit');
  $request = $bdd->prepare("SELECT * FROM comments WHERE article_id = :article_id ORDER BY created_at DESC");
  $request->execute(['article_id' => $article_id]);

  return $request->fetchAll(PDO::FETCH_ASSOC);
}

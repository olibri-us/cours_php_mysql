<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/database/connector.php');
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/comment/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/utils.php');
$bdd = connect_server('fake_reddit');

$author = get_connected_author();

if ($author['id'] == $_POST['id']) {
  $comment = view_comment($_POST['id']);
  $request = load_script($bdd,  "comment/update.sql");

  $result = $request->execute([
      'id' =>  $comment['id'],
      'content' => $_POST['content'],
  ]);
}

header('Location: /views/articles/view.php?article=' . $comment['article_id']);

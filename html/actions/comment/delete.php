<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/database/connector.php');
$bdd = connect_server('fake_reddit');

// delete comment from database
$request = load_script($bdd,  "comment/delete.sql");

$result = $request->execute([
  'id' => $_POST['comment']
]);

header('Location: /views/articles/view.php?article=' . $_POST['article']);
?>

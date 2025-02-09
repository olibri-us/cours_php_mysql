<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

function view_comment($id)
{
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd,  "comment/view.sql");
  $request->execute(['id' => $id]);

  return $request->fetch(PDO::FETCH_ASSOC);
}

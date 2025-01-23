<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");

function list_authors()
{
  global $root;
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd, "author/list.sql");
  $request->execute();

  return $request->fetchAll(PDO::FETCH_ASSOC);
}

<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database/connector.php");

function load_author_by_name($name)
{
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd,  "author/view.sql");
  $request->execute(['name' => $name]);

  return $request->fetch(PDO::FETCH_ASSOC);
}

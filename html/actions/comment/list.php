<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");
include_once("$root/utils.php");

function list_comments($id)
{
  $bdd = connect_server('fake_reddit');
  $request = load_script($bdd, "comment/list.sql");
  $request->execute(['id' => $id]);

return $request->fetchAll(PDO::FETCH_ASSOC);
}

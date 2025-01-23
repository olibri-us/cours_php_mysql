<?php

$root = $_SERVER['DOCUMENT_ROOT'];

function connect_server($dbname = '')
{
  $dsn = "mysql:host=db;charset=utf8";

  if ($dbname) {
    $dsn .= ';dbname=' . $dbname;
  }
  return new PDO($dsn, "root", "password");
}

function load_script($bdd, $script)
{
  global $root;
  $script = file_get_contents("$root/scripts/$script");
  return $bdd->prepare($script);
}

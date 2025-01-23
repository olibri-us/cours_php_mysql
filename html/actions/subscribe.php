<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");

$bdd = connect_server('fake_reddit');

$request = load_script($bdd, "author/add.sql");

$result = $request->execute([
    'name' => $_POST['name'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

header('Location: /index.php');

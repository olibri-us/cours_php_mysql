<?php

$root = $_SERVER['DOCUMENT_ROOT'];

include_once("$root/database/connector.php");

function list_comments($article_id)
{
    global $root;
    $bdd = connect_server('fake_reddit');
    $request = load_script($bdd, "comment/list.sql");
    $request->execute(['article_id' => $article_id]);

    return $request->fetchAll(PDO::FETCH_ASSOC);
}

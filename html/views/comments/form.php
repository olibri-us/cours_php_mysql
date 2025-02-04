<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/actions/article/view.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");

check_connexion();

$action = "/actions/comment/add.php?article=" . $_GET["article"];
?>

<head>
    <link href="/style.css" rel="stylesheet" />
</head>

<form action=<?= $action ?> method="POST" class="form">
    <h3>Ajouter un commentaire</h3>

    <label for="content"> Contenu</label>
    <textarea name="content" required></textarea>

    <input type="submit" value="Enregistrer" />
</form>
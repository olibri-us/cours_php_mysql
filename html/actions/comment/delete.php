<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database/connector.php");
include_once("$root/utils.php"); // Assurez-vous que ce fichier contient get_connected_author()

$bdd = connect_server('fake_reddit');
$author = get_connected_author();

// Vérifier que l'utilisateur est connecté
if (!$author) {
    die("Erreur : Vous devez être connecté pour supprimer un commentaire.");
}

// Vérifier que le commentaire existe et appartient à l'utilisateur
$comment_id = $_GET['comment'] ?? null;

if (!$comment_id) {
    die("Erreur : Commentaire non spécifié.");
}

// Charger le script SQL de suppression
$request = load_script($bdd, "comment/delete.sql");

// Exécuter la requête avec vérification de l'auteur du commentaire
$result = $request->execute([
    'comment_id' => $comment_id,
    'author_id' => $author['id']
]);

// Redirection vers la page de l'article après suppression
header("Location: " . $_SERVER['HTTP_REFERER']);
exit();

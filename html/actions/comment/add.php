<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include_once("$root/database/connector.php");
include_once("$root/utils.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article_id = $_POST['article_id'] ?? null;
    $author = trim($_POST['author'] ?? '');
    $content = trim($_POST['content'] ?? '');

    if (!$article_id || empty($author) || empty($content)) {
        die("Tous les champs sont requis.");
    }

    $stmt = $pdo->prepare("INSERT INTO comments (title, date, content, author_id, article_id) 
                           VALUES (:title, :date, :content, :author_id, :article_id)");

    $stmt->bindParam(':title', $author);
    $stmt->bindParam(':date', date('Y-m-d H:i:s'));
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':author_id', $author_id);
    $stmt->bindParam(':article_id', $article_id);

    if ($stmt->execute()) {
        header('Location: /views/articles/view.php?article=' . $article_id);
    } else {
        die("Erreur lors de l'ajout du commentaire.");
    }
}

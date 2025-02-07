<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/actions/article/view.php');

$id = $_GET["article"] ?? null;
if (!$id) {
    die("ID d'article manquant.");
}

$article = view_article($id);
$comments = $article["comments"] ?? [];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="../../style.css" rel="stylesheet" />
</head>

<body>
    <section>
        <article>
            <h1 class="title"><?= htmlspecialchars($article["title"]) ?></h1>
            <span><time><?= format_sql_date($article["date"]) ?></time></span>
            <span><?= htmlspecialchars($article["author_name"]) ?></span>
            <div class="content">
                <img src="<?= htmlspecialchars($article["img"]) ?>" alt="<?= htmlspecialchars($article["title"]) ?>" class="image">
                <p class="description"><?= nl2br(htmlspecialchars($article["content"])) ?></p>
            </div>
        </article>

        <aside>
            <h2>Commentaires (<?= count($comments) ?>)</h2>
            <?php if (!empty($comments)) : ?>
                <?php foreach ($comments as $comment) : ?>
                    <div class="comment">
                        <div class="comment-header">
                            <h3><?= htmlspecialchars($comment['author']) ?></h3>
                            <time><?= format_sql_date($comment['date']) ?></time>
                        </div>
                        <p class="comment-content"><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="no-comments">Aucun commentaire pour cet article.</p>
            <?php endif; ?>
        </aside>
    </section>
</body>

</html>
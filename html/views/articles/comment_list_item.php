<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils.php");
?>

<div class="comment">
    <h3><?= $comment['author_name'] ?></h3>
    <p><?= $comment['content'] ?></p>
    <p><?= format_sql_date_upgraded($comment['date']) ?></p>
    <?php if ($comment['author_id'] === get_connected_author()['id']): ?>
        <a href="/actions/comment/delete.php?comment=<?= $comment["id"] ?>&article=<?= $comment["article_id"] ?>" class="supp">Supprimer</a>
    <?php endif; ?>
</div>
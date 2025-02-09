<form action=<?= $action ?> method="POST" class="sendComment" enctype="multipart/form-data">
    <input type="hidden" name="article_id" value="<?= $_GET['article'] ?>">
    <textarea name="content" class="comment" placeholder="Écrire un commentaire..."></textarea>
    <input type="submit" value="Ajouter le commentaire" />
</form>
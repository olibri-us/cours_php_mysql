DELETE FROM comments WHERE id = :id;

UPDATE articles 
SET nb_comments = nb_comments - 1 
WHERE id = :article_id;
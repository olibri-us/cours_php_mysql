DELETE FROM comments WHERE id = :id;

UPDATE articles 
SET comment_count = comment_count - 1 
WHERE id = :article_id;
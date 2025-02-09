SELECT comments.*, authors.name AS author_name 
FROM comments
JOIN authors ON comments.author_id = authors.id
WHERE comments.article_id = :article_id;
SELECT comments.*, authors.name AS author_name FROM comments
JOIN authors ON author_id = authors.id
WHERE comments.article_id = :article_id ;

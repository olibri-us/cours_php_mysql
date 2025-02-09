SELECT comments.id, authors.name, comments.content AS author_name FROM comments
INNER JOIN authors ON author_id = authors.id;
WHERE comments.article_id = :article_id;

SELECT comments.id, comments.content, comments.date, authors.name AS author_name FROM comments
JOIN authors ON author_id = authors.id
WHERE article_id = :article_id;
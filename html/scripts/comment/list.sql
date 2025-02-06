SELECT c.id, c.author_id, a.name AS author, c.content, c.created_at
FROM comments c
JOIN authors a ON c.author_id = a.id
WHERE c.article_id = :article_id
ORDER BY c.created_at DESC;

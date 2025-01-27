SELECT au.name as author_name, au.id as author_id, c.id, c.title, c.date, c.content FROM comments c
JOIN authors au ON author_id = au.id
JOIN articles a ON article_id = a.id
WHERE a.id = :id;
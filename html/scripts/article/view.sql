SELECT articles.*, authors.name AS author_name FROM articles 
JOIN authors ON author_id = authors.id
WHERE articles.id = :id;
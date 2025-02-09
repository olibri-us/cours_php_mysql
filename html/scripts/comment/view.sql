SELECT comments.*, authors.name AS author_name FROM comments 
JOIN authors ON author_id = authors.id
WHERE comments.id = :id;
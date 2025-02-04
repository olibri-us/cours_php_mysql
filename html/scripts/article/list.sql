SELECT articles.*, authors.name AS author_name, COUNT(comments.id) AS comments_number FROM articles
JOIN authors ON articles.author_id = authors.id
LEFT JOIN comments ON articles.id = comments.article_id
GROUP BY articles.id;
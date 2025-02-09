SELECT articles.*, authors.name AS author_name, COUNT(comments.id) AS comments FROM articles
JOIN authors ON author_id = authors.id
JOIN comments ON articles.id = comments.article_id
GROUP BY articles.id;

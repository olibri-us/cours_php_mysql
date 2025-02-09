SELECT articles.*, authors.name AS author_name, COUNT(comments.id) AS comment_count
FROM articles
JOIN authors ON articles.author_id = authors.id
LEFT JOIN comments ON comments.article_id = articles.id
GROUP BY articles.id;

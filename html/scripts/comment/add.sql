INSERT INTO comments (article_id, author_id, content, created_at)
VALUES (:article_id, :author_id, :content, CURRENT_DATE);

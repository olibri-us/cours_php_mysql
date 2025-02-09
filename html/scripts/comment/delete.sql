DELETE FROM comments
WHERE id = :comment_id
AND author_id = :author_id;

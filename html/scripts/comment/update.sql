UPDATE `comments` 
SET 
`author_id` = :author_id,
`content`= :content
WHERE `id` = :id;

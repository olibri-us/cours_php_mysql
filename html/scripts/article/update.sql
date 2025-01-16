UPDATE `articles` 
SET 
`title`= :title,
`author_id` = :author_id,
`img`= :img_url,
`content`= :content
WHERE `id` = :id;

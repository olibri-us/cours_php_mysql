UPDATE `articles` 
SET 
`title`= :title,
`author` = :author,
`img`= :img_url,
`content`= :content
WHERE `id` = :id;
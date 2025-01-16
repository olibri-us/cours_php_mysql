UPDATE `articles` 
SET 
`title`= :title,
`date`= :date,
`author` = :author,
`img`= :img_url,
`content`= :content
WHERE `id` = :id;
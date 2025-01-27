INSERT INTO
    comments (`title`, `date`, `author_id`, `article_id`, `content`)
VALUES
    (:title, :date, :author_id, :article_id, :content );

UPDATE articles SET nb_comments = nb_comments + 1 WHERE id = :article_id;

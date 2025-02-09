USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS comments (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    article_id INTEGER NOT NULL,
    author_id INT NOT NULL,
    content TEXT NOT NULL
);
ALTER TABLE comments ADD CONSTRAINT fk_comments_article FOREIGN KEY (article_id) REFERENCES articles(id) ON DELETE CASCADE;
ALTER TABLE comments ADD CONSTRAINT fk_comments_author FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE CASCADE;
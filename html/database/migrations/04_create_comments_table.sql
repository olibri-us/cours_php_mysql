USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS comments (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content TEXT NOT NULL,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    author_id INT NOT NULL,
    article_id INT NOT NULL,
    CONSTRAINT fk_comments_authors FOREIGN KEY (author_id) REFERENCES authors(id),
    CONSTRAINT fk_comments_articles FOREIGN KEY (article_id) REFERENCES articles(id)
);

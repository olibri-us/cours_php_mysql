USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS comments (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    author_id INTEGER NOT NULL,
    article_id INTEGER NOT NULL,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    content VARCHAR(255) NOT NULL,
    FOREIGN KEY (author_id) REFERENCES authors(id),
    FOREIGN KEY (article_id) REFERENCES articles(id)
);

USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS comments (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    author_id INT NOT NULL,
    article_id INT NOT NULL,
    content TEXT NOT NULL,
    FOREIGN KEY (author_id) REFERENCES authors(id),
    FOREIGN KEY (article_id) REFERENCES articles(id) ON DELETE CASCADE
);

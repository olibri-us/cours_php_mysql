USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS comments (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    author_id INTEGER NOT NULL,
    content TEXT NOT NULL,
    article_id INTEGER NOT NULL,
    FOREIGN KEY (author_id) REFERENCES authors(id) ,
    FOREIGN KEY (article_id) REFERENCES articles(id)
);




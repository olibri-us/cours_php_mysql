USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS articles (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    author_id INT NOT NULL,
    img VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    nb_comments INT NOT NULL DEFAULT 0,
    FOREIGN KEY (author_id) REFERENCES authors(id)
);

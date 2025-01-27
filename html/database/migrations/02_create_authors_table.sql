USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS authors (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
-- ALTER TABLE articles CHANGE author author_id INT NOT NULL;
-- ALTER TABLE articles ADD FOREIGN KEY (author_id) REFERENCES authors(id);

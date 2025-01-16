USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS authors (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);
ALTER TABLE articles CHANGE author author_id INT NOT NULL;
ALTER TABLE articles ADD FOREIGN KEY (author_id) REFERENCES authors(id);
INSERT INTO authors (name) VALUES ("Loïc"), ("Maxime"), ("Pierre"), ("Samuel"), ("Gabriel"), ("Yoann"), ("Guillaume");
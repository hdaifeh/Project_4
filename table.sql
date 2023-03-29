CREATE TABLE posts (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  slug VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  thumbnail TEXT,
  author VARCHAR(255) NOT NULL,
  posted_at DATETIME NOT NULL
);

CREATE TABLE categories (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT
);

CREATE TABLE posts_categories (
  id_post INT(11) NOT NULL,
  id_category INT(11) NOT NULL,
  PRIMARY KEY (id_post, id_category),
  FOREIGN KEY (id_post) REFERENCES posts(id),
  FOREIGN KEY (id_category) REFERENCES categories(id)
);

CREATE DATABASE webpage;

USE webpage;

CREATE TABLE education (
  id INT AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  PRIMARY KEY (id)
);

CREATE TABLE notes (
  id INT AUTO_INCREMENT,
  title VARCHAR(255),
  content TEXT,
  PRIMARY KEY (id)
);
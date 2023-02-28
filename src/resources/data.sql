DROP DATABASE IF EXISTS `vote_db`;

CREATE DATABASE IF NOT EXISTS `vote_db`;

USE `vote_db`;

CREATE TABLE `users` (
	id INT(5) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    passwd VARCHAR(60) NOT NULL
);

CREATE TABLE `photos` (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    descript VARCHAR(100),
    user_id INT(5) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE `votes` (
	id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT(5) NOT NULL,
    photo_id INT(5) NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (photo_id) REFERENCES photos(id)
);
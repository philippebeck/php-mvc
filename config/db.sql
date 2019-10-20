-- WARNING : Don't forget to add the file name inside the .gitignore file when you add sensible datas here (like passwords)

-- For Development only ! (Depends on your online server architecture)
DROP DATABASE IF EXISTS `php_mvc`;
CREATE DATABASE `php_mvc` CHARACTER SET utf8;

-- Needs to be replaced in Production with the db name of the online server
USE `php_mvc`;

-- Creates the table User
CREATE TABLE `User`
(
    `id`        SMALLINT        UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    `name`      VARCHAR(50)     NOT NULL,
    `image`     VARCHAR(50)     UNIQUE,
    `email`     VARCHAR(100)    NOT NULL    UNIQUE,
    `pass`      VARCHAR(60)     NOT NULL
)
    ENGINE=INNODB DEFAULT CHARSET=utf8;

-- Inserts the User data
-- WARNING : Never store real passwords in a commit file
INSERT INTO `User`
(`name`,    `image`,        `email`,            `pass`)
VALUES
('John',    'john.jpg',     'john@doe.com',     'john465'),
('Jane',    'jane.jpg',     'jane@doe.com',     'jane465');

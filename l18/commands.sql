show databases;

CREATE DATABASE `test_skillup_db`;

CREATE TABLE `test_skillup_db`.`users_table` LIKE `skillup_db`.`users`;
USE `skillup_db`;
CREATE TABLE `user_contacts`
(
    `id`      INT(11)                            NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `contact` VARCHAR(100)                       NOT NULL UNIQUE,
    `type`    ENUM ('email', 'phone', 'address') NOT NULL,
    `user_id` INT(4)                             NOT NULL,
    CONSTRAINT `u-user_contacts-type-user_id` UNIQUE KEY (`type`, `user_id`),
    CONSTRAINT `fk-user_contacts-user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE ON DELETE RESTRICT
);

SELECT users.id,
       users.name,
       user_contacts.type,
       user_contacts.contact
FROM users
         INNER JOIN user_contacts ON users.id = user_contacts.user_id;


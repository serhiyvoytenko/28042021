CREATE TABLE `users`
(
    `id`        int(4) PRIMARY KEY AUTO_INCREMENT,
    `name`      varchar(100) NOT NULL UNIQUE,
    `birthday`  DATE         NULL,
    `create_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `update`    TIMESTAMP    NULL ON UPDATE CURRENT_TIMESTAMP
);

DESCRIBE `users`;
INSERT INTO `users` (`name`, `birthday`)
VALUES ('Serhiy', '1999-05-05');

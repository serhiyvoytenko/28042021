USE `skillup_db`;

CREATE TABLE `rooms`(
                        `id` INT PRIMARY KEY AUTO_INCREMENT,
                        `title` VARCHAR(255) NOT NULL UNIQUE,
                        `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `messages` (
                            `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                            `user_id` INT NULL,
                            `room_id` INT NOT NULL,
                            `text` TEXT NOT NULL,
                            `created_at` INT NOT NULL,
                            CONSTRAINT `messages-user_id-users-id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON UPDATE CASCADE ON DELETE SET NULL,
                            CONSTRAINT `messages-room_id-rooms-id` FOREIGN KEY (`room_id`) REFERENCES `rooms`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);
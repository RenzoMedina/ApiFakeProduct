CREATE TABLE products (`id` INT AUTO_INCREMENT PRIMARY KEY,
                        `name` VARCHAR(50)NOT NULL,
                        `price` FLOAT NOT NULL,
                        `quantity` INT NOT NULL,
                        `description` TEXT NOT NULL,
                        `create_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        `update_at` TIMESTAMP
                        )ENGINE = InnoDB;
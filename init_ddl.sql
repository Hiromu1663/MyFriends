CREATE SCHEMA `myfriends` DEFAULT CHARACTER SET utf8mb4 ;

CREATE TABLE `myfriends`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));


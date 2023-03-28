CREATE SCHEMA IF NOT EXISTS `hnizdecko` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `hnizdecko`;
CREATE TABLE IF NOT EXISTS `prostitutes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `age` VARCHAR(2) NOT NULL,
  `weight` VARCHAR(3) NOT NULL,
  `height` VARCHAR(3) NOT NULL,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
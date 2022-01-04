CREATE DATABASE fitnessDB;

USE fitnessDB;
CREATE TABLE `account` (
                           `username` VARCHAR(250) NOT NULL,
                           `password` VARCHAR(250) NOT NULL,
                           `email` VARCHAR(250) NOT NULL,
                           PRIMARY KEY (`email`),
                           UNIQUE INDEX `username` (`username`)
)
ENGINE=InnoDB COLLATE=utf8_general_ci;




USE fitnessDB;
CREATE TABLE `user` (
                        `first_name` VARCHAR(50) NOT NULL,
                        `last_name` VARCHAR(50) NOT NULL,
                        `user_n` INT NOT NULL AUTO_INCREMENT,
                        `email` VARCHAR(250) NULL DEFAULT NULL,
                        PRIMARY KEY (`user_n`),
                        INDEX `F K_user_account` (`email`),
                        CONSTRAINT `FK_user_account` FOREIGN KEY (`email`) REFERENCES `account` (`email`)
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=5
;